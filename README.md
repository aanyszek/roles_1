# roles

Simple add trait to user model to use roles. Contains role middlewware. 

# Instalation: 

## add to "\config\app.php":
    'providers' => [
        ...
        Logobinder\Roles\RolesServiceProvider::class,
        ...
    ],


## add to "\app\User.php":
    ...
    use \Logobinder\Roles\RolesTrait;
    ...
