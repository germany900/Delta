module.exports = function(app) {
  var mysqlDs = app.dataSources.db;
  var users = app.models.wp_users;
  var posts = app.models.wp_posts;
  var comments = app.models.wp_comments;
  

  // first autoupdate the `Author` model to avoid foreign key constraint failure
  mysqlDs.autoupdate('wp_users', function(err) {
    if (err) throw err;
    console.log('\nAutoupdated table `wp_users`.');

  });

  mysqlDs.autoupdate('wp_posts', function(err) {
    if (err) throw err;
    console.log('\nAutoupdated table `wp_posts`.');

  });

  mysqlDs.autoupdate('wp_comments', function(err) {
    if (err) throw err;
    console.log('\nAutoupdated table `wp_comments`.');

  });
}