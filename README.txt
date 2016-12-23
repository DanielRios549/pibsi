When clone the repository, do these actions:

1 - Install gulp and bower.
2 - Install gulp and bower dependencies.
3 - Execute the gulp task called "bower" to get only files needed and send then to repository, only once

After do these actions, you won't use any file on "bower_components" folder,
because the gulp task called "bower" will copy only the files that the project needs.

Use gulp task called "sass" to compile sass style to a css file.
Use gulp task called "watch" to watch sass files and compile then after a save.
Use gulp task called "default" to make two task above

Use gulp tasks called "watch" and "defeult" only once, they will keep running in background.

"nodes_modules" and "bowser_components" folders won't be sent to repository.