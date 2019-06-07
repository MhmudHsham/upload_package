<?php

namespace mhmudhsham\upload_package;

class upload_package {
	public function upload_file($file, $config) {
		$file_uploaded_extension = $file->getClientOriginalExtension();

		$allowed_extensions = config("upload_package.$config.file_extension");

		if (!in_array($file_uploaded_extension, $allowed_extensions)) {
			return [false, config("upload_package.messages.invalid_extension")];
		}

		$allowed_size = config("upload_package.$config.file_size");

		$file_uploaded_size = $file->getSize();

		if ($file_uploaded_size > $allowed_size) {
			return [false, config("upload_package.messages.invalid_size")];
		}

		$uploaded_file = $file->store('public/' . config("upload_package.$config.folder_name"));

		return [true, $uploaded_file];
	}
}