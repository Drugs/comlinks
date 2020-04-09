const fs = require('fs');

let dist = __dirname + '/../../dist/';

// css split

let sbadmin2_css = fs.readFileSync( dist + 'sb-admin-main.css' ).toString();
let sbadmin2_parts = sbadmin2_css.split('/* -- FILE_SPLIT -- */');

let bootstrap_css = sbadmin2_parts[0];
sbadmin2_css = sbadmin2_parts[1];

fs.writeFileSync( dist + 'sb-admin-main.css', sbadmin2_css);
fs.writeFileSync( dist + 'sb-admin-bootstrap.css', bootstrap_css);