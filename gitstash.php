<?
/*

 git stash - прячем изменения в карман
	1 применение (чтобы не ложить в ветку)
	2 применение чтобы закомитить в другую ветку (ложим в stash, прыгаем на нужную ветку, восствнвыливаем)


git stash list - какие stash есть
	!!!  Последний stash будет первым в стеке stash-ей  !!!
	, ответ
	WIP on master: 1011957 test commit (название ветки, с какого коммита был stash)

git stash apply stash@{1} - восстановить, если не указать stash то примениться последний
git stash pop - восстановить и удалить из списка stash-ей, если не указать stash то примениться последний
git stash drop - удалить из stash list определенный stash, или последний, если не указать
git stash clear - удалит весь stash list



шпаргалка
http://sale.megabit24.ru/blog/programmirovanie/shpargalka-git-komand/

git log -p -2
    -p   Показывает коммит с разнице (выводит патч), внесенную в каждый коммит.

git reset --hard HEAD резетнуть до коммита



переустановка сабмодулей
https://stackoverflow.com/questions/20929336/git-submodule-add-a-git-directory-is-found-locally-issue


Когда не мержит, и ругается на рвзные версии
git pull origin branchname --allow-unrelated-histories


*/