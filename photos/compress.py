#!/usr/bin/python

import os
import sys
from zipfile import ZipFile, ZIP_DEFLATED


def zip_dir(path):
    """
    Compress files in the specified directory and sub-directories
    Create one zip per folder

    :param path: directory to get files in
    :return:
    """
    for root, dirs, files in os.walk(path):
        if is_directory_valid(root, len(files)):
            print("Compressing '" + root + "'", end="")
            with ZipFile(os.path.join(root, get_current_dir(root)) + ".zip", "w", ZIP_DEFLATED) as zip_file:
                for fn in files:
                    if not fn.endswith("zip"):
                        print(".", end="")
                        absolute_file_name = os.path.join(root, fn)
                        zippped_file_name = absolute_file_name[len(root)+len(os.sep):]  # XXX: relative path
                        zip_file.write(absolute_file_name, zippped_file_name)
            print("done")
    print("COMPRESSION FINISHED")


def is_directory_valid(path, files_number):
    """
    Check if the given path is not hidden or emptty
    :param files_number: number of files in the folder
    :param path: Path to check
    :return: True if path contains a hidden folder or is empty, False otherwise
    """
    directories = path.split(os.sep)
    valid = files_number > 0
    for dn in directories:
        if dn.startswith(".") or not valid:
            valid = False
            break
    return valid


def get_current_dir(path):
    """
    Get the name of the current directory
    :param path: Path to search the name in
    :return: directory name
    """
    return os.path.basename(os.path.normpath(path))


def get_confirmation(path):
    """
    Tell the user which folders will be compressed, and asks for confirmation
    :param path: Root path for search
    :return: True if user confirmed, False otherwise
    """
    print("The following folders will be compressed (hidden and empty folders are ignored):")
    for root, dirs, files in os.walk(path):
        if is_directory_valid(root, len(files)):
            print(root)
    confirmation = input("Are you sure you want to proceed? [Y/n]")
    return confirmation == "Y" or confirmation == "y"


if __name__ == '__main__':
    # Get path from arguments or use the script's path
    if len(sys.argv) > 1:
        directory = sys.argv[1]
    else:
        directory = os.path.dirname(os.path.realpath(__file__))
    if get_confirmation(directory):
        zip_dir(directory)
    else:
        print("Compression aborted")
