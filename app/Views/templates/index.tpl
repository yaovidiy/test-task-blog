{* Smarty *}

{include file="header.tpl" title="Homepage"}
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
    {foreach from=$categories key=category_name item=category}
        <header class="header">
            <h2>{$category_name}</h2>
            <a href="/category/{$category_name}">
                All posts
            </a>
        </header>
        <section class="section">
            {foreach from=$category item=item}
                <div class="card">
                    <img src={$item.image} alt="{$item.post_name}" style="width: 100%; height: auto;" />
                    <h3>{$item.post_name}</h3>
                    <small>
                        {$item.published_at}
                    </small>
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