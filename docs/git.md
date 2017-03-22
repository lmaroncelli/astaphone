Github
=========

**init**

https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/

inizialmente creo il repository su GitHub e poi faccio il push del mio locale con


In Terminal, add the URL for the remote repository where your local repository will be pushed.

git remote add origin "remote repository URL"
# Sets the new remote
git remote -v
# Verifies the new remote URL


For example:

git remote add origin https://github.com/user/repo.git
# Set a new remote

git remote -v
# Verify new remote
origin  https://github.com/user/repo.git (fetch)
origin  https://github.com/user/repo.git (push)


Push the changes in your local repository to GitHub.

git push origin master
# Pushes the changes in your local repository up to the remote repository you specified as the origin

Successivamente si possono omettere i parametri origin master perché by default, and without additional parameters, git push sends all matching branches that have the same names as remote branches. 

quindi pusha master --> origin/master



**new branch**

ho creato un branch locale con 

git checkout -b grafica

l'ho pushato su github con  

git push origin grafica



da un altro client se faccio

git branch -r 

vedo i branch remoti

origin/HEAD -> origin/master
origin/grafica
origin/master


MA in locale, facendo 
git pull
non viene giù

DEVO FARE 

git fetch
git checkout grafica

> Branch grafica set up to track remote branch grafica from origin.
Switched to a new branch 'grafica'
