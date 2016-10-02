---
extends: _layouts.master
section: content
title: "Documentation"
activeNav: docs
---
## Usage
1. `press configure --global` creates the global configuration file at **~/.press-cli.json**.<br>
    **Note:** *The global configuration will also be created if it does not exist by the `press new` and `press configure` commands*
2. `press new <project-name>` creates a local **.press-cli.json** and runs the install.
3. `press configure <project-name>` creates a local **.press-cli.json** without running the install.
4. `press install` runs the install process if a **.press-cli.json** exists in the current directory.
