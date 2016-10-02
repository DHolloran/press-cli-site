---
extends: _layouts.master
section: content
title: "Getting Started"
activeNav: install
---
## Requirements
- Mac OS X
- Composer
- PHP 5.6+
- [Laravel Valet](https://laravel.com/docs/valet#installation) (Optional, allows for automatically setting up .dev domains)

## Install
1. Install Composer if not already installed.
    - [Installation instructions](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
    - Make sure the **~/.composer/vendor/bin** directory is in your system's "PATH".
2. Install PHP if not already installed, you can use [Homebrew](http://brew.sh/) to easily install PHP.
    - Install [Hombrew](http://brew.sh) or if Homebrew was already installed make sure it is up to date via `brew update`.
    - Install PHP 7.0 via `brew install homebrew/php/php70`.
3. Install Press CLI via `composer global require dholloran/press-cli`.
4. **(Optional)** Install [Laravel Valet](https://laravel.com/docs/valet#installation)

## Usage
1. `press configure --global` creates the global configuration file at **~/.press-cli.json**.<br>
    **Note:** *The global configuration will also be created if it does not exist by the `press new` and `press configure` commands*
2. `press new <project-name>` creates a local **.press-cli.json** and runs the install.
3. `press configure <project-name>` creates a local **.press-cli.json** without running the install.
4. `press install` runs the install process if a **.press-cli.json** exists in the current directory.
