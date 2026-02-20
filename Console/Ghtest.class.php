<?php

/**
 * SPDX-FileComment: Console commands for FreePBX CLI.
 * SPDX-FileCopyrightText: 2026 Sangoma US Inc.
 * SPDX-License-Identifier: GPL-3.0-or-later
 * SPDX-FileNotice: This file is part of FreePBX.
 * SPDX-FileContributor: Chris Maj
 */

namespace FreePBX\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Ghtest extends Command {
	protected function configure() {
		$this->setName('ghtest')
		->setDescription(_('Testing FreePBX repo GitHub Actions and more'))
		->setDefinition(array(
			new InputOption('hello', '', InputOption::VALUE_NONE, _('Hello')),
		))
		->setHelp(_('Help'));
	}
	protected function execute(InputInterface $input, OutputInterface $output) {
		if ($input->getOption('hello')) {
			$output->writeln(_('World'));
		} else {
			$output->writeln(_('Thank you for visiting.'));
		}
	}
}
