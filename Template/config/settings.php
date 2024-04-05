<style>
.fieldset-WysiwygMDEditor {border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;}
.icon-WysiwygMDEditor {border: none; padding-right: 10px; padding-left: 10px;}
.descr-WysiwygMDEditor {border: none; width: 100%; padding-left: 10px;}
</style>

<div class="page-header">
    <h2><?= t('WysiwygMDEditor_TITLE_SETTINGS') ?></h2>
</div>

<?= $this->url->icon('desktop', t('WysiwygMDEditor_LINK_SETTINGS_PREVIEW'), 'WysiwygMDEditorConfigController', 'preview', array('plugin' => 'WysiwygMDEditor')) ?>

<form method="post" action="<?= $this->url->href('WysiwygMDEditorConfigController', 'save', array('plugin' => 'WysiwygMDEditor')) ?>" autocomplete="off">
    <?= $this->form->csrf() ?>

    <fieldset class="fieldset-WysiwygMDEditor">
        <legend><?= t('WysiwygMDEditor_SETTINGS_EDITING_OPTIONS') ?></legend>
        <div class="descr-WysiwygMDEditor"><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_EDITING_DESCR')) ?></div>
        <br>
        <div class="icon-WysiwygMDEditor"><img src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Screenshots/textarea-editing-toolbar-injected-buttons.png"></div>

        <div>
            <?= $this->form->checkbox('WysiwygMDEditor_enable_easymde', t('WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON').' EasyMDE ',
             1, isset($values['WysiwygMDEditor_enable_easymde']) ? $values['WysiwygMDEditor_enable_easymde'] == 1 : 0) ?>
            <table><tr>
                <td class="icon-WysiwygMDEditor">
                    <img height="48" width="48" src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Assets/easymde/icon.svg">
                </td>
                <td class="descr-WysiwygMDEditor">
                    <a href="https://github.com/Ionaru/easy-markdown-editor" target="_blank" title="<?= t('Opens in a new window') ?>"> EasyMDE <i class="fa fa-external-link"></i></a>
                    <br>
                    <div><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_EASYMDE_DESCR')) ?></div>

                    <?php
                        if (!isset($values['WysiwygMDEditor_easymde_default_theme'])) {
                            $values['WysiwygMDEditor_easymde_default_theme'] = 'dimmed';
                        }
                    ?>
                    <?= $this->form->label(t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_SELECT'), 'WysiwygMDEditor_easymde_default_theme') ?>
                    <?= $this->form->select('WysiwygMDEditor_easymde_default_theme', array(
                        'light'  => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT'),
                        'dimmed' => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED'),
                        'dark'   => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK'),
                    ), $values) ?>
                </td>
            </tr></table>
        </div>

        <div>
            <?= $this->form->checkbox('WysiwygMDEditor_enable_stackedit', t('WysiwygMDEditor_SETTINGS_EDITING_ENABLE_BUTTON').' StackEdit+ ',
             1, isset($values['WysiwygMDEditor_enable_stackedit']) ? $values['WysiwygMDEditor_enable_stackedit'] == 1 : 0) ?>
            <table><tr>
                <td class="icon-WysiwygMDEditor">
                    <img height="48" width="48" src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Assets/stackedit/icon.svg">
                </td>
                <td class="descr-WysiwygMDEditor">
                    <a href="https://github.com/mafgwo/stackedit-plus" target="_blank" title="<?= t('Opens in a new window') ?>"> StackEdit+ <i class="fa fa-external-link"></i></a>
                    <br>
                    <div><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_STACKEDIT_DESCR')) ?></div>
                </td>
            </tr></table>
        </div>

        <?= $this->modal->submitButtons() ?>
    </fieldset>

    <fieldset class="fieldset-WysiwygMDEditor">
        <legend><?= t('WysiwygMDEditor_SETTINGS_RENDERING_OPTIONS') ?></legend>
        <div class="descr-WysiwygMDEditor"><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_RENDERING_DESCR')) ?></h3></div>

        <div>
            <?= $this->form->checkbox('WysiwygMDEditor_enable_easymde_rendering', t('WysiwygMDEditor_SETTINGS_RENDERING_ENABLE_EASYMDE'),
             1, isset($values['WysiwygMDEditor_enable_easymde_rendering']) ? $values['WysiwygMDEditor_enable_easymde_rendering'] == 1 : 0) ?>
            <table><tr>
                <td class="icon-WysiwygMDEditor">
                    <img height="48" width="48" src="<?= $this->helper->url->base() ?>plugins/WysiwygMDEditor/Assets/easymde/icon.svg">
                </td>
                <td class="descr-WysiwygMDEditor">
                    <a href="https://github.com/Ionaru/easy-markdown-editor" target="_blank" title="<?= t('Opens in a new window') ?>"> EasyMDE <i class="fa fa-external-link"></i></a>
                    <br>
                    <div><?= $this->helper->text->markdown(e('WysiwygMDEditor_SETTINGS_RENDERING_EASYMDE_DESCR')) ?></div>

                    <?php
                        if (!isset($values['WysiwygMDEditor_easymde_render_theme'])) {
                            $values['WysiwygMDEditor_easymde_render_theme'] = 'dimmed';
                        }
                    ?>
                    <?= $this->form->label(t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_THEME_SELECT'), 'WysiwygMDEditor_easymde_render_theme') ?>
                    <?= $this->form->select('WysiwygMDEditor_easymde_render_theme', array(
                        'light'  => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_LIGHT'),
                        'dimmed' => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DIMMED'),
                        'dark'   => t('WysiwygMDEditor_SETTINGS_EASYMDE_THEME_DARK'),
                    ), $values) ?>

                    <?php
                        if (!isset($values['WysiwygMDEditor_easymde_render_code_highlight'])) {
                            $values['WysiwygMDEditor_easymde_render_code_highlight'] = 1;
                        }
                    ?>
                    <br><?= $this->form->label(t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_SELECT'), 'WysiwygMDEditor_easymde_render_code_highlight') ?>
                    <?= $this->form->select('WysiwygMDEditor_easymde_render_code_highlight', array(
                        0 => t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_NONE'),
                        1 => t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLJS'),
                        2 => t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_CODE_HIGHLIGHT_HLCS_PLUGIN'),
                    ), $values) ?>

                    <br><?= $this->form->checkbox('WysiwygMDEditor_easymde_render_transparent_background', t('WysiwygMDEditor_SETTINGS_EASYMDE_RENDER_TRANSPARENT_BACKGROUND_ENABLE'),
                     1, isset($values['WysiwygMDEditor_easymde_render_transparent_background']) ? $values['WysiwygMDEditor_easymde_render_transparent_background'] == 1 : 0) ?>
                </td>
            </tr></table>
        </div>

        <?= $this->modal->submitButtons() ?>
    </fieldset>

</form>
