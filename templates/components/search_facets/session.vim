let SessionLoad = 1
if &cp | set nocp | endif
let s:so_save = &so | let s:siso_save = &siso | set so=0 siso=0
let v:this_session=expand("<sfile>:p")
silent only
cd /var/www/html/drupal/sites/cbufaces.cairnrepo.org/themes/cbu_scholar
if expand('%') == '' && !&modified && line('$') <= 1 && getline(1) == ''
  let s:wipebuf = bufnr('%')
endif
set shortmess=aoO
badd +29 template.php
badd +41 templates/components/search_facets/block--islandora-solr--basic-facets.tpl.php
badd +0 templates/components/search_facets/islandora-solr-facet.tpl.php
args .
edit templates/components/search_facets/block--islandora-solr--basic-facets.tpl.php
set splitbelow splitright
wincmd _ | wincmd |
vsplit
1wincmd h
wincmd w
wincmd _ | wincmd |
split
1wincmd k
wincmd w
wincmd t
set winheight=1 winwidth=1
exe 'vert 1resize ' . ((&columns * 79 + 79) / 158)
exe '2resize ' . ((&lines * 32 + 33) / 67)
exe 'vert 2resize ' . ((&columns * 78 + 79) / 158)
exe '3resize ' . ((&lines * 32 + 33) / 67)
exe 'vert 3resize ' . ((&columns * 78 + 79) / 158)
argglobal
setlocal fdm=syntax
setlocal fde=0
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
3
normal! zo
let s:l = 63 - ((47 * winheight(0) + 32) / 65)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
63
normal! 07|
lcd /var/www/html/drupal/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/templates/components/search_facets
wincmd w
argglobal
edit /var/www/html/drupal/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/templates/components/search_facets/islandora-solr-facet.tpl.php
setlocal fdm=manual
setlocal fde=0
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
silent! normal! zE
let s:l = 15 - ((9 * winheight(0) + 16) / 32)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
15
normal! 018|
lcd /var/www/html/drupal/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/templates/components/search_facets
wincmd w
argglobal
edit /var/www/html/drupal/sites/cbufaces.cairnrepo.org/themes/cbu_scholar/template.php
setlocal fdm=manual
setlocal fde=0
setlocal fmr={{{,}}}
setlocal fdi=#
setlocal fdl=0
setlocal fml=1
setlocal fdn=20
setlocal fen
silent! normal! zE
3,7fold
3
normal! zo
let s:l = 27 - ((17 * winheight(0) + 16) / 32)
if s:l < 1 | let s:l = 1 | endif
exe s:l
normal! zt
27
normal! 026|
lcd /var/www/html/drupal/sites/cbufaces.cairnrepo.org/themes/cbu_scholar
wincmd w
exe 'vert 1resize ' . ((&columns * 79 + 79) / 158)
exe '2resize ' . ((&lines * 32 + 33) / 67)
exe 'vert 2resize ' . ((&columns * 78 + 79) / 158)
exe '3resize ' . ((&lines * 32 + 33) / 67)
exe 'vert 3resize ' . ((&columns * 78 + 79) / 158)
tabnext 1
if exists('s:wipebuf')
  silent exe 'bwipe ' . s:wipebuf
endif
unlet! s:wipebuf
set winheight=1 winwidth=20 shortmess=filmnrxoOtT
let s:sx = expand("<sfile>:p:r")."x.vim"
if file_readable(s:sx)
  exe "source " . fnameescape(s:sx)
endif
let &so = s:so_save | let &siso = s:siso_save
doautoall SessionLoadPost
unlet SessionLoad
" vim: set ft=vim :
