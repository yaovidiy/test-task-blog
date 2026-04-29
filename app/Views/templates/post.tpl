{include file="header.tpl" title="Post Page!"}
    <main class="container">
        <a href="/">
            Back
        </a>
        <img src={$post.image} alt="{$post.name}" style="width:100%; height: auto" />

        <h1>
            {$post.name}

            Category: {$post.category_name}
        </h1>
        
        <div class="">
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
    </main>
{include file="footer.tpl"}