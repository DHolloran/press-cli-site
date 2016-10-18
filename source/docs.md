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

## Configuration File (.press-cli.json)

When running `press new <project-name>` or `press configure <project-name>` a global **.press-cli.json** is created in your home directory. This will be the base for each individual **.press-cli.json** so you will not need to enter details that are replicated across most sites such as database connection, plugins and user details.

The global **.press-cli.json** is pre-filled with standard configuration I would use in my setup with MySQL, Laravel Valet and plugins to get you started. Feel free to use it as is or edit it to your hearts content. You will find more information below about each section of the configuration.

Of course not all projects are the same. So, if you need to make any changes you can always use `press configure <project-name>` to create the configuration file. So you can edit it before running `press install <project-name>` in the project directory.

### Database
- **user(string):** The user name for the created database.
- **password(string):** The password for the created database.
- **prefix(string):** The database prefix to use for the created database.
- **name(string):** The database name to use for the created database.
    - **Note: This will be created if empty in the form of wp_&lt;project-name&gt;**.
- **host(string):** The database host for the created database.

### Plugins

Can be used to install plugins in the WordPress plugin repository, on your local machine or on a remote server.

- **plugin(string):** Plugin slug in the wordpress.org repository. If installing a custom plugin a unique slug.
- **activate(boolean):** If the plugin should be activated after install. Defaults to false.
- **location(string):** Optional, location when installing plugins other than from wordpress.org.

### User

By default all user details will not be saved in the local **.press-cli.json** unless disabled in the global **.press-cli.json** Settings configuration.

- **username(string):** The installation administrator user.
- **email(string):** The installation administrator user email.
- **password(string):** The installation administrator user password.

### Theme

- **type(string):** The type of theme download. Currently zip is the only option supported but tar/git is in the works.
- **url(string):** The URL/Path to the theme.
- **name(string):** The theme directory name. Defaults to the value of &lt;project-name&gt;.

### Menus
- **name(string):** The name of the menu.
- **location(string):** The menu location slug.

### Site
- **title(string):** The site title used during the installation.
- **url(string)** The site URL. Defaults to http://&lt;project-name&gt;.dev.

### Rewrite
- **structure(string):** The site permalink structure. Defaults to `/%postname%/`.

### Commands
- **preInstall(array):** Commands to run in the root install directory before installation starts.
- **postInstallTheme(array):** Commands to run in the installed theme directory after the theme is installed and activated.
- **postInstall(array):** Commands to run in the root install directory after installation completes.

### Settings (Global Only)
- **removeUserPassword(boolean):** If the user password should be removed from the local configuration once installation is complete.
- **removeUserEmail(boolean):** If the user email should be removed from the local configuration once installation is complete.
- **removeUserName(boolean):** If the user name should be removed from the local configuration once installation is complete.
