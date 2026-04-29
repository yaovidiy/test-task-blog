<?php
/* Smarty version 5.8.0, created on 2026-04-29 09:23:33
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1ce15cc8b17_68890898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '814fbe0328b9be8866836a7d3219c75526dc9c90' => 
    array (
      0 => 'index.tpl',
      1 => 1777454613,
      2 => 'file',
    ),
    'c66a575e49fcb0fe29a41888ed63534b1e8ab3c8' => 
    array (
      0 => 'header.tpl',
      1 => 1777454171,
      2 => 'file',
    ),
    '8cd2c37f12b959609cfa3c7f493012afd50a9bce' => 
    array (
      0 => 'footer.tpl',
      1 => 1777454196,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
))) {
function content_69f1ce15cc8b17_68890898 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/app/Views/templates';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body><style>
    .container {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding-inline: 16px;
        padding-block: 32px;
        max-width: 1280px;
        margin-inline: auto;
    }

    .header {
        display: flex;
        justify-content: space-between;
        gap: 10px;
    }

    .section {
        display: flex;
        flex-direction: column;
        gap: 8px;
        max-width: 100%;
        width: 100%;
        overflow: hidden;
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

    @media (min-width: 768px) {
        .section {
            flex-direction: row;
            justify-content: space-around;
            overflow-x: auto;

        }
    }
</style>


<main class="container">
            <header class="header">
            <h2>Food</h2>
            <a href="/category/Food">
                All posts
            </a>
        </header>
        <section class="section">
                            <div class="card">
                    <img src=https://picsum.photos/seed/715/800/600 alt="Post 7 for Category 4" style="width: 100%; height: auto;" />
                    <h3>Post 7 for Category 4</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 7 in category 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/37">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/494/800/600 alt="Post 10 for Category 4" style="width: 100%; height: auto;" />
                    <h3>Post 10 for Category 4</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 10 in category 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/40">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/336/800/600 alt="Post 4 for Category 4" style="width: 100%; height: auto;" />
                    <h3>Post 4 for Category 4</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 4 in category 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/34">
                        Read more
                    </a>
                </div>
                    </section>
            <header class="header">
            <h2>Health</h2>
            <a href="/category/Health">
                All posts
            </a>
        </header>
        <section class="section">
                            <div class="card">
                    <img src=https://picsum.photos/seed/380/800/600 alt="Post 3 for Category 5" style="width: 100%; height: auto;" />
                    <h3>Post 3 for Category 5</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 3 in category 5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/43">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/375/800/600 alt="Post 1 for Category 5" style="width: 100%; height: auto;" />
                    <h3>Post 1 for Category 5</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 1 in category 5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/41">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/839/800/600 alt="Post 10 for Category 5" style="width: 100%; height: auto;" />
                    <h3>Post 10 for Category 5</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 10 in category 5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/50">
                        Read more
                    </a>
                </div>
                    </section>
            <header class="header">
            <h2>Lifestyle</h2>
            <a href="/category/Lifestyle">
                All posts
            </a>
        </header>
        <section class="section">
                            <div class="card">
                    <img src=https://picsum.photos/seed/310/800/600 alt="Post 6 for Category 2" style="width: 100%; height: auto;" />
                    <h3>Post 6 for Category 2</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 6 in category 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/16">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/315/800/600 alt="Post 7 for Category 2" style="width: 100%; height: auto;" />
                    <h3>Post 7 for Category 2</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 7 in category 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/17">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/864/800/600 alt="Post 2 for Category 2" style="width: 100%; height: auto;" />
                    <h3>Post 2 for Category 2</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 2 in category 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/12">
                        Read more
                    </a>
                </div>
                    </section>
            <header class="header">
            <h2>Technology</h2>
            <a href="/category/Technology">
                All posts
            </a>
        </header>
        <section class="section">
                            <div class="card">
                    <img src=https://picsum.photos/seed/810/800/600 alt="Post 10 for Category 1" style="width: 100%; height: auto;" />
                    <h3>Post 10 for Category 1</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 10 in category 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/10">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/704/800/600 alt="Post 9 for Category 1" style="width: 100%; height: auto;" />
                    <h3>Post 9 for Category 1</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 9 in category 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/9">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/585/800/600 alt="Post 1 for Category 1" style="width: 100%; height: auto;" />
                    <h3>Post 1 for Category 1</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 1 in category 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/1">
                        Read more
                    </a>
                </div>
                    </section>
            <header class="header">
            <h2>Travel</h2>
            <a href="/category/Travel">
                All posts
            </a>
        </header>
        <section class="section">
                            <div class="card">
                    <img src=https://picsum.photos/seed/951/800/600 alt="Post 9 for Category 3" style="width: 100%; height: auto;" />
                    <h3>Post 9 for Category 3</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 9 in category 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/29">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/988/800/600 alt="Post 7 for Category 3" style="width: 100%; height: auto;" />
                    <h3>Post 7 for Category 3</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 7 in category 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/27">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/255/800/600 alt="Post 4 for Category 3" style="width: 100%; height: auto;" />
                    <h3>Post 4 for Category 3</h3>
                    <small>
                        2026-04-29 08:12:34
                    </small>
                    <p>
                        This is the content for post 4 in category 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/24">
                        Read more
                    </a>
                </div>
                    </section>
    </main>
    </body>
</html><?php }
}
