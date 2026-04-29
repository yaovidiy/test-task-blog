<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title|default: "My Testing Blog"}</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding-inline: 16px;
            padding-block: 32px;
            max-width: 1280px;
            margin-inline: auto;
        }
        .card {
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            border: 1px solid black;
            padding-block: 16px;
            padding-inline: 8px;
            max-width: 368px;
        }

        .card small {
            color: gray;
        }

        .card-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px; 
        }
    </style>
</head>
<body>