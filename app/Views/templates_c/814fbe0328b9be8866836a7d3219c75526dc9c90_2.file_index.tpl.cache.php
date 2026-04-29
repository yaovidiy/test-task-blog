<?php
/* Smarty version 5.8.0, created on 2026-04-29 09:23:33
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1ce15cc4ba8_76503292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '814fbe0328b9be8866836a7d3219c75526dc9c90' => 
    array (
      0 => 'index.tpl',
      1 => 1777454613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_69f1ce15cc4ba8_76503292 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/app/Views/templates';
$_smarty_tpl->getCompiled()->nocache_hash = '55195152769f1ce15cbedf4_66504011';
?>

<?php $_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Homepage"), (int) 0, $_smarty_current_dir);
?>
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
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category', false, 'category_name');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category_name')->value => $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
        <header class="header">
            <h2><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_name')), ENT_QUOTES, 'UTF-8');?>
</h2>
            <a href="/category/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('category_name')), ENT_QUOTES, 'UTF-8');?>
">
                All posts
            </a>
        </header>
        <section class="section">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category'), 'item');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
                <div class="card">
                    <img src=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['image']), ENT_QUOTES, 'UTF-8');?>
 alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['post_name']), ENT_QUOTES, 'UTF-8');?>
" style="width: 100%; height: auto;" />
                    <h3><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['post_name']), ENT_QUOTES, 'UTF-8');?>
</h3>
                    <small>
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['published_at']), ENT_QUOTES, 'UTF-8');?>

                    </small>
                    <p>
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['text']), ENT_QUOTES, 'UTF-8');?>

                    </p>
                    <a href="/post/<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')['id']), ENT_QUOTES, 'UTF-8');?>
">
                        Read more
                    </a>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </section>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</main>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
