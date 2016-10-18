---
extends: _layouts.master
section: content
title: "About"
activeNav: about
---
## Why would I use Press CLI?
Press CLI is a configurable opinionated command line installer for WordPress. It allows you to setup WordPress installs quickly when starting a new project. You should spend your time making something awesome not setting up your install. Since a large amount of these items are duplicated over most sites we might as well automate it. I have found many tools strung together to accomplish this but nothing that was fully automated.

## What does Pres CLI do?
- Fully installs WordPress database and all.
- Installs Plugins from wordpress.org or anywhere else via zip file.
- Installs your base theme, if you have one. You should...
- Creates and sets up menu locations. ([Auto created from theme locations on the list](https://github.com/DHolloran/press-cli/issues/35))
- Sets your permalink rewrite structure.
- Run any command you like at certain points in the install process.
- If you use [Laravel Valet](https://laravel.com/docs/valet) you can automatically access you site at project-name.dev

Check out the [documentation](/docs/) to learn more about using Press CLI.
