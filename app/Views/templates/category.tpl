{* Smarty *}
{include file="header.tpl" title=$title}
    <style>
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .pagination {
            display: flex;
            gap: 8px;
            justify-content: center;
            align-items: center;
        }

        .category-header {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .category-header h1, p {
            margin: 0
        }

        .sort-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 32px;
        }

        .sort-active {
            color: white;
            padding: 8px;
            background-color: lightblue;
        }

        @media (min-width: 768px) {
            .grid {
                grid-template-columns: repeat(3, 1fr)
            }
        }
    </style>
    <main class="container">
        <a href="/">
            Back
        </a>

        <div class="category-header">
            <h1>
                All Posts in {$pagginatedPosts.category_data.name} Category
            </h1>
            <p>
                {$pagginatedPosts.category_data.description}
            </p>
        </div>

        <div class="sort-container">
            <a  {if $show_latest === 1}
                    class="sort-active"
                {/if}
                href="?page={$pagginatedPosts.current_page}&latest=1">
                Show Latest First
            </a>

             <a {if $show_latest === 0}
                    class="sort-active"
                {/if}
                href="?page={$pagginatedPosts.current_page}&latest=0">
                Show Most Viewed First
            </a>
        </div>

        <section class="grid">
            {foreach from=$pagginatedPosts['items'] item=post}
                <div class="card">
                    <img src={$post.image} alt="{$post.name}" style="width: 100%; height: auto;" />
                    <h3>{$post.name}</h3>
                    <div class="card-info">
                        <small>
                            {$post.published_at}
                        </small>

                        <small>
                            Views: {$post.views}
                        </small>
                    </div>
                    <p>
                        {$post.text}
                    </p>
                    <a href="/post/{$post.id}">
                        Read more
                    </a>
                </div>
            {/foreach}
        </section>

        <nav class="pagination">
            {if $pagginatedPosts.has_prev}
                <a href="?page={$pagginatedPosts.current_page - 1}">« Previous</a>
            {else}
                <span class="disabled">« Previous</span>
            {/if}

            {for $i=1 to $pagginatedPosts.total_pages}
                {if $i == $pagginatedPosts.current_page}
                    <span class="current-page">{$i}</span>
                {else}
                    <a href="?page={$i}">{$i}</a>
                {/if}
            {/for}

            {if $pagginatedPosts.has_next}
                <a href="?page={$pagginatedPosts.current_page + 1}">Next »</a>
            {else}
                <span class="disabled">Next »</span>
            {/if}
        </nav>
    </main>
{include file="footer.tpl"}