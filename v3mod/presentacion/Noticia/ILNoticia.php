<hr />
<div class="contenido-real">
    {section name=i loop=$regs}
    <div class="contenido-real-titulo">
        {$regs[i].not_titulo}
    </div>
    <div class="contenido-real-texto">
        {$regs[i].not_descripcion}
    </div>
    <div class="contenido-real-texto">
        <a href="../Noticia/Noticias.php#n{$regs[i].id}">seguir leyendo</a>
    </div>
    <hr/>
    {/section}
</div>