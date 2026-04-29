{include file="header.tpl" title="Post Page!"}
<style>
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 16px;
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
        <article>
            <img src={$post.image} alt="{$post.name}" style="width:100%; height: auto" />

            <h1>
                {$post.name}

                Category: {$post.category_name}
            </h1>
            
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
        </article>

        <section class="grid">
            {foreach from=$similar_posts item=item}
                <div class="card">
                    <img src="{$item.image}" alt="{$item.name}" style="width: 100%; height: auto;" />
                    <h3>{$item.name}</h3>
                    <div class="card-info">
                        <small>
                            {$item.published_at}
                        </small>

                        <small>
                            Views: {$item.views}
                        </small>
                    </div>
                    <p>
                        {$item.text}
                    </p>
                    <a href="/post/{$item.id}">
                        Read more
                    </a>
                </div>
            {/foreach}
        <section>

    </main>
{include file="footer.tpl"}