#!/usr/bin/python

import os
import sys
from zipfile import ZipFile, ZIP_DEFLATED
from PIL import Image


def get_images(path):
    """
    get images in the folder specified and all its sub folders (hidden and empty folders are ignored)

    :param path: directory to get images in
    :return: images list
    """
    file_list = []
    for root, dirs, files in os.walk(path):
        if is_directory_valid(root, len(files)):
                for fn in files:
                    if fn.endswith("png") or fn.endswith("jpg") or fn.endswith("bmp"):
                        file_list.append(os.path.join(root, fn))
    return file_list


def compress_images(images):
    """
    Compress images to a 140x105 format, cropping in the middle if needed
    :param images: list o images paths to compress
    :return:
    """
    size = 140, 105  # 4/3 format
    print("Creating thumbnails", end="")
    for current_img in images:
        print(".", end="")
        # If height is higher we resize vertically, if not we resize horizontally
        img = Image.open(current_img)
        # Get current and desired ratio for the images
        img_ratio = img.size[0] / float(img.size[1])
        ratio = size[0] / float(size[1])
        # The image is scaled/cropped vertically or horizontally depending on the ratio
        if ratio > img_ratio:
            img = img.resize((size[0], round(size[0] * img.size[1] / img.size[0])), Image.BILINEAR)
            # Crop in the middle
            box = (0, round((img.size[1] - size[1]) / 2), img.size[0], round((img.size[1] + size[1]) / 2))
            img = img.crop(box)
        elif ratio < img_ratio:
            img = img.resize((round(size[1] * img.size[0] / img.size[1]), size[1]), Image.BILINEAR)
            # Crop in the middle
            box = (round((img.size[0] - size[0]) / 2), 0, round((img.size[0] + size[0]) / 2), img.size[1])
            img = img.crop(box)
        else:
            img = img.resize((size[0], size[1]), Image.BILINEAR)
            # If the scale is the same, we do not need to crop
        filename = get_new_path(current_img)
        if not os.path.exists(os.path.dirname(filename)):
            try:
                os.makedirs(os.path.dirname(filename))
            except OSError:
                sys.exit("Fatal : Directory '" + os.path.dirname(filename) + "' does not exist and cannot be created")

        img.save(filename, "JPEG")
    print("Done. Thumbnails saved in 'photos_thumb' directory")


def get_new_path(img):
    """
    Replace the original path to the thumbnail one (replace 'photos' by 'photos_thumb')
    :param img: original path
    :return: modified path
    """
    return img.replace("/photos/", "/photos_thumb/", 1)


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
    Check if the given path is not hidden or empty
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
        compress_images(get_images(directory))
    else:
        print("Compression aborted")
