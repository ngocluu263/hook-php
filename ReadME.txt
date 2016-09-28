Run as root on RHEL, CentOS or Fedora, for Node.js v4 LTS Argon:

curl --silent --location https://rpm.nodesource.com/setup_4.x | bash -

hook console
...
 _                 _
| |__   ___   ___ | | __
| '_ \ / _ \ / _ \| |/ /
| | | | (_) | (_) |   <
|_| |_|\___/ \___/|_|\_\

Client-side playground.
Environment: development
API Documentation: http://doubleleft.github.io/hook-javascript

Available variables to hack on:
        - config - /root/restful_api/hook-ext/credentials/development/cli.json
        - hook - Hook.Client
        - $ - jQuery 2.1.0
        - window

client: javascript> hook.collection('events').count()
{ error: 'no such table: app1_events', code: 500 }
client: javascript> hook.collection('posts').create({
  title: "Post name",
  summary: "My awesome new post",
  stars: 5
});
{ title: 'Post name',
  summary: 'My awesome new post',
  stars: 5,
  updated_at: Wed Sep 28 2016 16:00:00 GMT-0700 (PDT),
  created_at: Wed Sep 28 2016 16:00:00 GMT-0700 (PDT),
  _id: 1 }
client: javascript> hook.collection('posts').count()
1
client: javascript> hook.collection('posts').create({
  title: "Post name",
  summary: "My awesome new post",
  stars: 5
});
{ title: 'Post name',
  summary: 'My awesome new post',
  stars: 5,
  updated_at: Wed Sep 28 2016 16:01:16 GMT-0700 (PDT),
  created_at: Wed Sep 28 2016 16:01:16 GMT-0700 (PDT),
  _id: 2 }
client: javascript> hook.collection('posts').count()
2
client: javascript> hook.collection('posts').where('stars', '>=', 5).then(function(data) {
  console.log(data);
});
[ { _id: '1',
    created_at: Wed Sep 28 2016 16:00:00 GMT-0700 (PDT),
    updated_at: Wed Sep 28 2016 16:00:00 GMT-0700 (PDT),
    title: 'Post name',
    summary: 'My awesome new post',
    stars: 5 },
  { _id: '2',
    created_at: Wed Sep 28 2016 16:01:16 GMT-0700 (PDT),
    updated_at: Wed Sep 28 2016 16:01:16 GMT-0700 (PDT),
    title: 'Post name',
    summary: 'My awesome new post',
    stars: 5 } ]
+---------------------------------------------------+
¦ _id ¦ title       ¦ summary               ¦ stars ¦
+-----+-------------+-----------------------+-------¦
¦ '1' ¦ 'Post name' ¦ 'My awesome new post' ¦ 5     ¦
+-----+-------------+-----------------------+-------¦
¦ '2' ¦ 'Post name' ¦ 'My awesome new post' ¦ 5     ¦
+---------------------------------------------------+
client: javascript>


ook server
...
PHP 5.5.38 Development Server started at Wed Sep 28 16:32:39 2016
Listening on http://0.0.0.0:4665
Document root is /root/restful_api/hook/public
Press Ctrl-C to quit.
[Wed Sep 28 16:33:19 2016] PHP Fatal error:  Class 'Jenssegers\Mongodb\Connection' not found in /root/restful_api/hook/src/bootstrap/connection.php on line 32
[Wed Sep 28 16:33:19 2016] 127.0.0.1:37207 [200]: /collection/posts - Class 'Jenssegers\Mongodb\Connection' not found in /root/restful_api/hook/src/bootstrap/connection.php on line 32
^C
[root@foreman hook]# mc

[root@foreman hook]# composer install
Do not run Composer as root/super user! See https://getcomposer.org/root for details
Loading composer repositories with package information
Installing dependencies (including require-dev) from lock file
  - Installing aws/aws-sdk-php (2.7.27)
    Loading from cache

  - Installing dropbox/dropbox-sdk (v1.1.6)
    Loading from cache

  - Installing duccio/apns-php (dev-master 8efa27d)
    Cloning 8efa27df25787a4e48e648a0467985ac7c75d47c

  - Installing jenssegers/mongodb (v2.1.7)
    Loading from cache

  - Installing mockery/mockery (0.8.0)
    Loading from cache

  - Installing opauth/opauth (dev-master 3ff68e7)
    Cloning 3ff68e72c21a3691e5a87fc8c30e458edbb22990

  - Installing opauth/facebook (dev-master 31e2618)
    Cloning 31e26188d1ac67a8d1831c1a8426bab2b3b7cd02

  - Installing opauth/twitter (dev-master 023f514)
    Cloning 023f514a307e97dcdf9320f3fc1c5cfcf6fb5974

  - Installing phpunit/php-token-stream (1.2.2)
    Loading from cache

  - Installing symfony/yaml (v2.7.2)
    Loading from cache

  - Installing phpunit/php-text-template (1.2.1)
    Loading from cache

  - Installing phpunit/phpunit-mock-objects (1.2.3)
    Loading from cache

  - Installing phpunit/php-timer (1.0.6)
    Loading from cache

  - Installing phpunit/php-file-iterator (1.4.0)
    Loading from cache

  - Installing phpunit/php-code-coverage (1.2.18)
    Loading from cache

  - Installing phpunit/phpunit (3.7.38)
    Loading from cache

aws/aws-sdk-php suggests installing ext-apc (Allows service description opcode caching, request and response caching, and credentials caching)
aws/aws-sdk-php suggests installing monolog/monolog (Adds support for logging HTTP requests and responses)
jenssegers/mongodb suggests installing jenssegers/mongodb-sentry (Add Sentry support to Laravel-MongoDB)
jenssegers/mongodb suggests installing jenssegers/mongodb-session (Add MongoDB session support to Laravel-MongoDB)
opauth/opauth suggests installing opauth/google (Allows Google authentication)
phpunit/phpunit-mock-objects suggests installing ext-soap (*)
phpunit/php-code-coverage suggests installing ext-xdebug (>=2.0.5)
phpunit/phpunit suggests installing phpunit/php-invoker (~1.1)
Generating autoload files
[root@foreman hook]# hook server
