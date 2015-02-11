;<?php exit();?>
[system]
char = 'utf-8';
time = '+8';
debug = d11;
[db]
mysql.username  = root
mysql.password  = root
mysql.chars     = utf-8
mysql.dbname    = zhiwen
[controller]
defaultModuleName = defaultModule
defaultControllerName = defaultController
defaultActionName = defaultAction
options.userController.Path = /var/apache2/2.2/htdocs/opensmt/trunk/site/usr/
options.userController.Map = map.php
;options.userController.FileExt = .so
;options.userController.FileRule =\\1\\0controller\\0\\2
options.userController.FileRule =\\1Module\\0controller\\0\\2Controller@\\1\\0controller\\0\\2Controller@\\1Module\\0controller\\0\\2@\\1\\0controller\\0\\2@
options.userController.ClassRule =\\2
;options.userController.MethodRule =\\1\\0\\2\\
options.userController.MapRule = \\1\\0etc\\0\\2

[view]

className = Smarty_View
template.test = t22
template.path = ./view/
template.cache = ./data/cache/view/cache/
template.compile = ./data/cache/view/compile/
template.name = wp
template.baseUrl = /site/view/wp/
[adminmenu]
;id是用来在模板中进行各种判断所需要信息
Diagnostics.id = diagnostics
Diagnostics.desc  = diagnostics
Diagnostics.current = diagnostics
Diagnostics.open = diagnostics
Diagnostics.sub.ping.text = ping
Diagnostics.sub.ping.href = /diagnostics/default/ping
Diagnostics.sub.ping.action = ping
Diagnostics.sub.traceroute.text = Traceroute
Diagnostics.sub.traceroute.href = /diagnostics/default/traceroute
Diagnostics.sub.traceroute.action = traceroute

disk.id = disk
disk.desc  = disk
disk.current = disk
disk.open = disk
disk.sub.diskinfo.text = diskinfo
disk.sub.diskinfo.href = /disk/default/diskinfo
disk.sub.diskinfo.action = diskinfo
disk.sub.zpoolinfo.text = zpoolinfo
disk.sub.zpoolinfo.href = /disk/default/zpoolinfo
disk.sub.zpoolinfo.action = zpoolinfo
disk.sub.zpoolcreate.text = zpoolcreate
disk.sub.zpoolcreate.href = /disk/default/zpoolcreate
disk.sub.zpoolcreate.action = zpoolcreate
disk.sub.zpoolop.text = zpoolop
disk.sub.zpoolop.href = /disk/default/zpoolop
disk.sub.zpoolop.action = zpoolop
disk.sub.zpoolio.text = zpoolio
disk.sub.zpoolio.href = /disk/default/zpoolio
disk.sub.zpoolio.action = zpoolio

zfs.id = zfs
zfs.desc = zfs
zfs.current = zfs
zfs.open = zfs
zfs.sub.zfsinfo.text = zfsinfo
zfs.sub.zfsinfo.href = /zfs/default/zfsinfo
zfs.sub.zfsinfo.action = zfsinfo
zfs.sub.zfscreate.text = zfscreate
zfs.sub.zfscreate.href = /zfs/default/zfscreate
zfs.sub.zfscreate.action = zfscreate
zfs.sub.zfsquery.text = zfsquery
zfs.sub.zfsquery.href = /zfs/default/zfsquery
zfs.sub.zfsquery.action = zfsquery
zfs.sub.zfssnapshot.text = zfssnapshot
zfs.sub.zfssnapshot.href = /zfs/default/zfssnapshot
zfs.sub.zfssnapshot.action = zfssnapshot

service.id = service
service.desc  = service
service.current = service
service.open = service
service.sub.ftpmanagement.text = FTP
service.sub.ftpmanagement.href = /service/default/ftpmanagement
service.sub.ftpmanagement.action = ftpmanagement
service.sub.sshmanagement.text = SSH
service.sub.sshmanagement.href = /service/default/sshmanagement
service.sub.sshmanagement.action = sshmanagement
service.sub.smbmanagement.text = CIFS/SMB
service.sub.smbmanagement.href = /service/default/smbmanagement
service.sub.smbmanagement.action = smbmanagement
service.sub.nfsmanagement.text = NFS
service.sub.nfsmanagement.href = /service/default/nfsmanagement
service.sub.nfsmanagement.action = nfsmanagement
service.sub.httpmanagement.text = Webserver
service.sub.httpmanagement.href = /service/default/httpmanagement
service.sub.httpmanagement.action = httpmanagement
service.sub.rsyncmanagement.text = RSYNC
service.sub.rsyncmanagement.href = /service/default/rsyncmanagement
service.sub.sryncmanagement.action = rsyncmanagement
service.sub.iscsimanagement.text = iSCSI Target
service.sub.iscsimanagement.href = /service/default/iscsimanagement
service.sub.iscsimanagement.action = iscsimanagement

Access.id = access
Access.desc  = access
Access.current = access
Access.open = access
Access.sub.user.text = user
Access.sub.user.href = /access/default/user
Access.sub.user.action = user
Access.sub.group.text = group
Access.sub.group.href = /access/default/group
Access.sub.group.action = group
Access.sub.edituser.action = edituser
Access.sub.edituser.href = /access/default/edituser
Access.sub.editgroup.href = /access/default/editgroup
Access.sub.editgroup.action = editgroup

Status.id = status
Status.desc = status
Status.current = status
Status.open = status
Status.sub.system.text = system
Status.sub.system.href = /status/default/system
Status.sub.system.action = system

Help.id = help
Help.desc = help
Help.current = help
Help.open = help
Help.sub.license.text = license
Help.sub.license.href = /help/default/license
Help.sub.license.action = license

Share.id = Share
Share.desc = Share
Share.current = Share
Share.open = Share
Share.sub.samba.text = CIFS/SMB
Share.sub.samba.href = /share/default/samba
Share.sub.samba.action = samba
Share.sub.sambaEdit.href = /share/default/editsamba
Share.sub.sambaEdit.action = editsamba

test.id = test
test.desc = test
test.current = test
test.open = test
;链接是的文字描述
test.sub.test1.text = text1
;链接的地址
test.sub.test1.href =  /test/test/test1/
;链接的样式控制参数,是来处理开启样式
test.sub.test1.action = test1

test.sub.test2.text = text1
test.sub.test2.href =  /test/test/test1/
test.sub.test2.action = test1

test.sub.test3.text = text1
test.sub.test3.href =  /test/test/test1/
test.sub.test3.action = test1

test.sub.test4.text = text1
test.sub.test4.href =  /test/test/test1/
test.sub.test4.action = test1

test.sub.test5.text = text1
test.sub.test5.href =  /test/test/test1/
test.sub.test5.action = test1

test1.id = test2
test1.desc =test2
//open控制菜单是否缺省展开,此值与id相等时即可开启子菜单
test1.open = test2

test1.sub.test1.text = text1
test1.sub.test1.href =  /test/test/test1/
test1.sub.test1.action = test1

test1.sub.test2.text = text1
test1.sub.test2.href =  /test/test/test1/
test1.sub.test2.action = test1

test1.sub.test3.text = text1
test1.sub.test3.href =  /test/test/test1/
test1.sub.test3.action = test1

test1.sub.test4.text = text1
test1.sub.test4.href =  /test/test/test1/
test1.sub.test4.action = test1

test1.sub.test5.text = text1
test1.sub.test5.href =  /test/test/test1/
test1.sub.test5.action = test1
