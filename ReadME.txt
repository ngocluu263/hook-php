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
