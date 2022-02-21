<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/docs.css">
    <title>Documentation</title>
</head>
<body>
    <div id="docs_title">
        <h1>Lumen Studies Documentation</h1>
        <hr>
    </div>
    <div id="docs_body">
        <main>
            <p>Anime</p>
            <button type="button" class="docs_collapsible">Create - <code>POST</code> - <code>/anime/create</code></button>
            <div class="docs_content">
                <p>Create request example:</p>
                <code>
                    <pre>
    {
        japanese_name: "Sangatu no Lion (３月のライオン)",
        english_name: "March Comes in like a Lion"
    }
                    </pre>
                </code>
                <hr>
                <p>Success response example: (status code: 201)</p>
                <code>
                    <pre>
    {
        message: "Anime successfully inserted!"
    }
                    </pre>
                </code>
            </div>
        </main>
    </div>

    <script language="javascript" src="/js/docs.js"></script>
</body>
</html>