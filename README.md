# roles



Instalation: 


add to "\composer.json":
   "psr-4": {
            "App\\": "app/",
            "Logobinder\\Roles\\": "packages/logobinder/roles/src/"
        }

add to "\config\app.php":
   'providers' => [
        ...
        Logobinder\Roles\RolesServiceProvider::class,
        ...
   ],


add to "\app\User.php":
    ...
    use \Logobinder\Roles\RolesTrait;
    ...


composer dumpautoload
