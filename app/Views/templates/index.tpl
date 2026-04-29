{* Smarty *}

{include file="header.tpl" title="Homepage"}
<style>
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
    {foreach from=$categories key=category_name item=category}
        <header class="header">
            <h2>{$category_name}</h2>
            <a href="/category/{$categories[$category_name][0]['category_slug']}">
                All posts
            </a>
        </header>
        <section class="section">
            {foreach from=$category item=item}
                <div class="card">
                    <img src={$item.image} alt="{$item.post_name}" style="width: 100%; height: auto;" />
                    <h3>{$item.post_name}</h3>
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
        </section>
    {/foreach}
</main>

{include file="footer.tpl"}