<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>PHP HTML5 Realtime Activity Streams using Pusher</title>
    <link rel="stylesheet/less" type="text/css" href="lib/twitter-bootstrap/lib/bootstrap.less">
    <script src="lib/less/less-1.1.5.min.js"></script>
    <link href="styles.css" rel="stylesheet"/>
    <link href="UX/public/activity-streams.css" rel="stylesheet"/>
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="//code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="//js.pusher.com/2.2/pusher.min.js"></script>
    <script src="UX/public/js/PusherActivityStreamer.js"></script>
    <script src="js/ExampleActivities.js"></script>
    <script>
        $(function () {
            var pusher = new Pusher('7b0cc00ab6716c7191b4')
            var activityChannel = pusher.subscribe('site-activity');
            var activityMonitor = new PusherActivityStreamer(activityChannel, "#activity_stream_example");
            var examples = new ExampleActivities(activityMonitor, pusher);
            $("#sendTest").click(function () {
                activityMonitor.sendActivity('test-event');
            });
        });
    </script>
</head>
<body>
<button id="sendTest" class="btn info">Send Test</button>
<ul id="activity_stream_example" class="activity-stream no-actions"></ul>
</body>
</html>