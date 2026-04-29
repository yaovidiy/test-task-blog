<?php
/* Smarty version 5.8.0, created on 2026-04-29 12:33:29
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1fa9962d7e3_71670375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '814fbe0328b9be8866836a7d3219c75526dc9c90' => 
    array (
      0 => 'index.tpl',
      1 => 1777466007,
      2 => 'file',
    ),
    'c66a575e49fcb0fe29a41888ed63534b1e8ab3c8' => 
    array (
      0 => 'header.tpl',
      1 => 1777465957,
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
function content_69f1fa9962d7e3_71670375 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/app/Views/templates';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
<body><style>
    .header {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        align-items: center;
    }

    .section {
        display: flex;
        flex-direction: column;
        gap: 8px;
        max-width: 100%;
        width: 100%;
        overflow: hidden;
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
            <a href="/category/food">
                All posts
            </a>
        </header>
        <section class="section">
                            <div class="card">
                    <img src=https://picsum.photos/seed/706/800/600 alt="Post 1 for Category 4" style="width: 100%; height: auto;" />
                    <h3>Post 1 for Category 4</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:19
                        </small>

                        <small>
                            Views: 932
                        </small>
                    </div>
                    <p>
                        This is the content for post 1 in category 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/31">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/445/800/600 alt="Post 8 for Category 4" style="width: 100%; height: auto;" />
                    <h3>Post 8 for Category 4</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:20
                        </small>

                        <small>
                            Views: 842
                        </small>
                    </div>
                    <p>
                        This is the content for post 8 in category 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/38">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/171/800/600 alt="Post 2 for Category 4" style="width: 100%; height: auto;" />
                    <h3>Post 2 for Category 4</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:19
                        </small>

                        <small>
                            Views: 808
                        </small>
                    </div>
                    <p>
                        This is the content for post 2 in category 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/32">
                        Read more
                    </a>
                </div>
                    </section>
            <header class="header">
            <h2>Health</h2>
            <a href="/category/health">
                All posts
            </a>
        </header>
        <section class="section">
                            <div class="card">
                    <img src=https://picsum.photos/seed/125/800/600 alt="Post 10 for Category 5" style="width: 100%; height: auto;" />
                    <h3>Post 10 for Category 5</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:20
                        </small>

                        <small>
                            Views: 933
                        </small>
                    </div>
                    <p>
                        This is the content for post 10 in category 5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/50">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/942/800/600 alt="Post 5 for Category 5" style="width: 100%; height: auto;" />
                    <h3>Post 5 for Category 5</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:20
                        </small>

                        <small>
                            Views: 913
                        </small>
                    </div>
                    <p>
                        This is the content for post 5 in category 5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/45">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/230/800/600 alt="Post 2 for Category 5" style="width: 100%; height: auto;" />
                    <h3>Post 2 for Category 5</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:20
                        </small>

                        <small>
                            Views: 847
                        </small>
                    </div>
                    <p>
                        This is the content for post 2 in category 5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/42">
                        Read more
                    </a>
                </div>
                    </section>
            <header class="header">
            <h2>Lifestyle</h2>
            <a href="/category/lifestyle">
                All posts
            </a>
        </header>
        <section class="section">
                            <div class="card">
                    <img src=https://picsum.photos/seed/756/800/600 alt="Post 4 for Category 2" style="width: 100%; height: auto;" />
                    <h3>Post 4 for Category 2</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:19
                        </small>

                        <small>
                            Views: 822
                        </small>
                    </div>
                    <p>
                        This is the content for post 4 in category 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/14">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/354/800/600 alt="Post 7 for Category 2" style="width: 100%; height: auto;" />
                    <h3>Post 7 for Category 2</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:19
                        </small>

                        <small>
                            Views: 657
                        </small>
                    </div>
                    <p>
                        This is the content for post 7 in category 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/17">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/133/800/600 alt="Post 8 for Category 2" style="width: 100%; height: auto;" />
                    <h3>Post 8 for Category 2</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:19
                        </small>

                        <small>
                            Views: 538
                        </small>
                    </div>
                    <p>
                        This is the content for post 8 in category 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/18">
                        Read more
                    </a>
                </div>
                    </section>
            <header class="header">
            <h2>Technology</h2>
            <a href="/category/technology">
                All posts
            </a>
        </header>
        <section class="section">
                            <div class="card">
                    <img src=https://picsum.photos/seed/602/800/600 alt="Post 10 for Category 1" style="width: 100%; height: auto;" />
                    <h3>Post 10 for Category 1</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:19
                        </small>

                        <small>
                            Views: 975
                        </small>
                    </div>
                    <p>
                        This is the content for post 10 in category 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/10">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/987/800/600 alt="Post 7 for Category 1" style="width: 100%; height: auto;" />
                    <h3>Post 7 for Category 1</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:19
                        </small>

                        <small>
                            Views: 922
                        </small>
                    </div>
                    <p>
                        This is the content for post 7 in category 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/7">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/684/800/600 alt="Post 3 for Category 1" style="width: 100%; height: auto;" />
                    <h3>Post 3 for Category 1</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:19
                        </small>

                        <small>
                            Views: 727
                        </small>
                    </div>
                    <p>
                        This is the content for post 3 in category 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/3">
                        Read more
                    </a>
                </div>
                    </section>
            <header class="header">
            <h2>Travel</h2>
            <a href="/category/travel">
                All posts
            </a>
        </header>
        <section class="section">
                            <div class="card">
                    <img src=https://picsum.photos/seed/787/800/600 alt="Post 2 for Category 3" style="width: 100%; height: auto;" />
                    <h3>Post 2 for Category 3</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:19
                        </small>

                        <small>
                            Views: 829
                        </small>
                    </div>
                    <p>
                        This is the content for post 2 in category 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/22">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/623/800/600 alt="Post 1 for Category 3" style="width: 100%; height: auto;" />
                    <h3>Post 1 for Category 3</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:19
                        </small>

                        <small>
                            Views: 776
                        </small>
                    </div>
                    <p>
                        This is the content for post 1 in category 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/21">
                        Read more
                    </a>
                </div>
                            <div class="card">
                    <img src=https://picsum.photos/seed/247/800/600 alt="Post 7 for Category 3" style="width: 100%; height: auto;" />
                    <h3>Post 7 for Category 3</h3>
                    <div class="card-info">
                        <small>
                            2026-04-29 11:24:19
                        </small>

                        <small>
                            Views: 770
                        </small>
                    </div>
                    <p>
                        This is the content for post 7 in category 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="/post/27">
                        Read more
                    </a>
                </div>
                    </section>
    </main>

    </body>
</html><?php }
}
