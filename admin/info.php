<div class="wrap">
    <?php
        $plugin = \SOSIDEE_HSC\SosPlugin::instance();

        echo '<h2>' . $plugin::t_('page.info.title') . '</h2>';
        echo '<p>' . $plugin::t_('page.info.subtitle') . '</p>';

        echo '<h2>' . $plugin::t_('page.info.par.usage') . '</h2>';

        echo '<p>' . $plugin::t_( 'page.info.par.usage.description', ['{TAG}' => $plugin::$SC_TAG] ) . '</p>';

        echo '<p>' . $plugin::t_('page.info.usage.example') . ':</p>';
        echo '<p>1. <strong>' . $plugin::t_('page.info.usage.example.1.description') . '</strong></p>';
        echo '<pre>[' . $plugin::$SC_TAG . ' hide="guest"]<em>' . $plugin::t_('page.info.usage.example.1.content') . '</em>[/' . $plugin::$SC_TAG . ']</pre>';
        echo '<p>2. <strong>' . $plugin::t_('page.info.usage.example.2.description') . '</strong></p>';
        echo '<pre>[' . $plugin::$SC_TAG . ' hide="logged"]<em>' . $plugin::t_('page.info.usage.example.2.content') . '</em>[/' . $plugin::$SC_TAG . ']</pre>';
        echo '<p>3. <strong>' . $plugin::t_('page.info.usage.example.3.description') . '</strong></p>';
        echo '<pre>[' . $plugin::$SC_TAG . ' show="guest"]<em>' . $plugin::t_('page.info.usage.example.3.content') . '</em>[/' . $plugin::$SC_TAG . ']</pre>';
        echo '<p>4. <strong>' . $plugin::t_('page.info.usage.example.4.description') . '</strong></p>';
        echo '<pre>[' . $plugin::$SC_TAG . ' show="logged"]<em>' . $plugin::t_('page.info.usage.example.4.content') . '</em>[/' . $plugin::$SC_TAG . ']</pre>';
        echo '<p>5. <strong>' . $plugin::t_('page.info.usage.example.5.description') . '</strong></p>';
        echo '<pre>[' . $plugin::$SC_TAG . ' show="logged" role="subscriber"]<em>' . $plugin::t_('page.info.usage.example.5.content') . '</em>[/' . $plugin::$SC_TAG . ']</pre>';
        echo '<p>6. <strong>' . $plugin::t_('page.info.usage.example.6.description') . '</strong></p>';
        echo '<pre>[' . $plugin::$SC_TAG . ' show="logged" user="foobar"]<em>' . $plugin::t_('page.info.usage.example.6.content') . '</em>[/' . $plugin::$SC_TAG . ']</pre>';

    ?>
</div>
