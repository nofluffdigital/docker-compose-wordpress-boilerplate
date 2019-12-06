# Dockerized Wordpress instance

# FORK REPO DO NOT PUSH TO IT (other than updates)

To Run 

```bash
docker-compose up

```

To Quit 
```
ctrl + c

Or

cmd + c
```

To clear / remove volumes (This wipes everything that is created on start up)

```bash
docker-composer down --volumes
```


To edit wordpress url 

```text

in wp_options under option_value replace

'home' value with 'localhost:8080' # some sites do not have this

AND

'siteurl' value with 'localhost:8080'
```

# Docker project for debugging php in docker with VScode & PHP Debug

## How to run

Step 1. Run container

`docker-compose up`

Step 2. Check container is working

e.g. `http://localhost:[port]/[file.php]`

Step 3. Debugging a file

Make sure VScode has `PHP Debug` extension installed

Open any php file, add a break point anywhere and run the debugger e.g. `f5`



Notes: `zend_extension` variable inside php.ini may need updating in the future, simply run the container and terminal in `docker exec -it [container name] bash`

once inside the container run `find / -name xdebug.so` to find the latest verison / file name. Update php.ini file with results

If you change the `wordpress` directory name, make sure to update the `docker-compose.yml` & vscode `launch.json` files