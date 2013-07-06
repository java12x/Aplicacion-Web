<?php /* Smarty version 2.6.14, created on 2013-02-26 22:54:11
         compiled from Noticia/ILNoticia.php */ ?>
<hr />
<div class="contenido-real">
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['regs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
    <div class="contenido-real-titulo">
        <?php echo $this->_tpl_vars['regs'][$this->_sections['i']['index']]['not_titulo']; ?>

    </div>
    <div class="contenido-real-texto">
        <?php echo $this->_tpl_vars['regs'][$this->_sections['i']['index']]['not_descripcion']; ?>

    </div>
    <div class="contenido-real-texto">
        <a href="../Noticia/Noticias.php#n<?php echo $this->_tpl_vars['regs'][$this->_sections['i']['index']]['id']; ?>
">seguir leyendo</a>
    </div>
    <hr/>
    <?php endfor; endif; ?>
</div>