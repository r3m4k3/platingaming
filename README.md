Technologies I have used:
* Symfony3 with Doctrine (MySQL)
* Twig 
* Bootstrap
* Jquery
* Phpunit (only few tests)

Improvements to do in the future:
1. Rewrite all controllers to use services like CommentController.
2. Use voters (maybe in the future ACL list) to better control access to resources.
3. Don't use anemic entity models with setters and getters, use DAO instead and make database agnostic models.
4. Add tests for all entities.
5. Add functional tests.

Running phpunit tests:
vendor/bin/phpunit

Running fixtures containing 2 roles and 1 example user:
php bin/console doctrine:fixtures:load

Users:
login: admin
password: test1