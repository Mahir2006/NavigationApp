<!DOCTYPE html>
<html>
  <head>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="https://apis.google.com/js/client.js"></script>

    <script>
      function auth() {
        var config = {
          'client_id': '420857449727-4g5dv888cshmrrihr5o3qoa033968c1d.apps.googleusercontent.com',
          'scope': 'https://www.google.com/m8/feeds'
        };
        gapi.auth.authorize(config, function() {
          fetch(gapi.auth.getToken());
        });
      }

      function fetch(token) {
        $.ajax({
          url: 'https://www.google.com/m8/feeds/contacts/default/full?alt=json',
          dataType: 'jsonp',
          data: token
        }).done(function(data) {
            console.log(JSON.stringify(data));
          });
      }
    </script>
  </head>

  <body>
    <button onclick="auth();">GET CONTACTS FEED</button>
  </body>
</html>