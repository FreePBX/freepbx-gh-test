<?php

/**
 * SPDX-FileComment: Testing some things for FreePBX in GitHub using GitHub Actions and other tools.
 * SPDX-FileCopyrightText: 2026 Sangoma US Inc.
 * SPDX-License-Identifier: GPL-3.0-or-later
 * SPDX-FileNotice: This file is part of FreePBX.
 * SPDX-FileContributor: Chris Maj
 */

namespace FreePBX\modules;

use BMO;
use FreePBX_Helpers;

class Ghtest extends FreePBX_Helpers implements BMO {

	public function __construct($freepbx = null) {
		if ($freepbx == null) {
			throw new \Exception("Not given a FreePBX Object");
		}
		$this->freepbx = $freepbx;
	}

	public function install() {
		// this is a test
		$this->writelog(_("install"));
		$this->writelog(_("install test also"));
	}

	public function uninstall() {
		// test of the uninstall comments
		$this->writelog(_("uninstall"));
	}

	public function chownFreepbx() {
		// comment for chown
		$this->writelog(_("ownership"));
	}

	public function doConfigPageInit($page) {
		// comment for configure page
		$this->writelog(_("configure page"));
		$this->writelog(_("configure page test more"));
	}

	public function showPage() {
		$this->writelog(_("show page"));
		return load_view(__DIR__ . "/views/index.php");
	}

	public function writelog($msg) {
		$log_dir = $this->freepbx->Config->get("ASTLOGDIR");
		$date    = date("Y-m-d H:i:s", strtotime("now"));
		error_log($date . " - " . $msg . "\n", 3, $log_dir . "/ghtest.log");
	}

}
