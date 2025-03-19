<?php

//
// Class: DataStore
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Datastore' => 'Datastore',
	'Class:Datastore+' => '',
	'Class:Datastore/Name' => '%1$s',
	'Class:Datastore:baseinfo' => 'Informations Générales',
	'Class:Datastore:date' => 'Dates',
	'Class:Datastore:local' => 'Stockage Local',
	'Class:Datastore:network' => 'Stockage Réseau',
	'Class:Datastore/Attribute:finalclass' => 'Classe',
	'Class:Datastore/Attribute:finalclass+' => '',
	'Class:Datastore/Attribute:name' => 'Nom',
	'Class:Datastore/Attribute:name+' => '',
	'Class:Datastore/Attribute:uuid' => 'UUID',
	'Class:Datastore/Attribute:uuid+' => 'Universal Unique IDentifier du Datastore',
	'Class:Datastore/Attribute:org_id' => 'Organisation',
	'Class:Datastore/Attribute:org_id+' => 'Organisation à laquelle le Datastore est attaché',
	'Class:Datastore/Attribute:type' => 'Type',
	'Class:Datastore/Attribute:type+' => 'File system utilisé par le datastore',
	'Class:Datastore/Attribute:type/Value:vmfs' => 'VMFS',
	'Class:Datastore/Attribute:type/Value:vmfs+' => 'Virtual Machine File System',
    'Class:Datastore/Attribute:type/Value:vmfs5' => 'VMFS 5',
    'Class:Datastore/Attribute:type/Value:vmfs5+' => 'Virtual Machine File System, version 5',
    'Class:Datastore/Attribute:type/Value:vmfs6' => 'VMFS 6',
    'Class:Datastore/Attribute:type/Value:vmfs6+' => 'Virtual Machine File System, version 6',
	'Class:Datastore/Attribute:type/Value:nfs' => 'NFS',
	'Class:Datastore/Attribute:type/Value:nfs+' => 'Network File System',
    'Class:Datastore/Attribute:type/Value:nfs3' => 'NFS 3',
    'Class:Datastore/Attribute:type/Value:nfs3+' => 'Network File System, version 3',
    'Class:Datastore/Attribute:type/Value:nfs41' => 'NFS 4.1',
    'Class:Datastore/Attribute:type/Value:nfs41+' => 'Network File System, version 4.1',
	'Class:Datastore/Attribute:type/Value:vsan' => 'vSAN',
	'Class:Datastore/Attribute:type/Value:vsan+' => '',
	'Class:Datastore/Attribute:type/Value:vvol' => 'vVol',
	'Class:Datastore/Attribute:type/Value:vvol+' => 'Volume Virtuel',
	'Class:Datastore/Attribute:capacity' => 'Capacité (GB)',
	'Class:Datastore/Attribute:length+' => 'Capacité totale du Datastore, en Giga Bytes',
	'Class:Datastore/Attribute:description' => 'Description',
	'Class:Datastore/Attribute:description+' => '',
	'Class:Datastore/Attribute:hypervisor_id' => 'Hyperviseur',
	'Class:Datastore/Attribute:hypervisor_id+' => 'Hyperviseur utilisé pour le stockage local. Cet attribut ne peut être renseigné conjointement avec celui relatif au Système de stockage',
	'Class:Datastore/Attribute:location_id' => 'Lieu',
	'Class:Datastore/Attribute:location_id+' => 'Lieu ou est situé le Système de stockage',
	'Class:Datastore/Attribute:storagesystem_id' => 'Système de stockage',
	'Class:Datastore/Attribute:storagesystem_id+' => 'Système de stockage externe. Cet attribut ne peut être renseigné conjointement avec celui relatif à l\'Hyperviseur',
	'Class:Datastore/Attribute:virtualhosts_list' => 'Hôtes Virtuels',
	'Class:Datastore/Attribute:virtualhosts_list+' => 'Hôtes sur lesquels le datastore est monté',
	'Class:Datastore/Attribute:mountingpoint' => 'Point de montage',
	'Class:Datastore/Attribute:mountingpoint+' => '',
	'Class:Datastore/Attribute:move2production' => 'Date de mise en production',
	'Class:Datastore/Attribute:move2production+' => '',
    'Class:Datastore/Attribute:virtualmachines_list' => 'Machines Virtuelles',
    'Class:Datastore/Attribute:virtualmachines_list+' => 'Liste de toutes les machines virtuelles utilisant le datastore',
));

//
// Class: Hypervisor
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Hypervisor/Attribute:uuid' => 'UUID',
	'Class:Hypervisor/Attribute:uuid+' => 'Universal Unique IDentifier de l\'hyperviseur',
	'Class:Hypervisor/Attribute:hostid' => 'ID Host vSphere',
	'Class:Hypervisor/Attribute:hostid+' => 'ID vSphere de l\'hyperviseur',
	'Class:Hypervisor/Attribute:datastores_list' => 'Datastores',
	'Class:Hypervisor/Attribute:datastores_list+' => 'Datastores utilisant l\'hyperviseur en tant que stockage local',
));

//
// Class: StorageSystem
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:StorageSystem/Attribute:datastores_list' => 'Datastores',
	'Class:StorageSystem/Attribute:datastores_list+' => 'Datastores utilisant le système de stockage en tant que stockage réseau',
));

//
// Class: VirtualMachine
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:VirtualMachine/Attribute:uuid' => 'UUID',
	'Class:VirtualMachine/Attribute:uuid+' => 'Universal Unique IDentifier de la machine virtuelle',
    'Class:VirtualMachine/Attribute:datastores_list' => 'Datastores',
    'Class:VirtualMachine/Attribute:datastores_list+' => 'Datastores utilisés par la machine virtuelle',
    'Class:VirtualMachine/Attribute:power_state' => 'Etat de l\'alimentation',
    'Class:VirtualMachine/Attribute:power_state+' => '',
    'Class:VirtualMachine/Attribute:power_state/Value:on' => 'Allumée',
    'Class:VirtualMachine/Attribute:power_state/Value:on+' => '',
    'Class:VirtualMachine/Attribute:power_state/Value:off' => 'Eteinte',
    'Class:VirtualMachine/Attribute:power_state/Value:off+' => '',
    'Class:VirtualMachine/Attribute:power_state/Value:suspended' => 'Suspendue',
    'Class:VirtualMachine/Attribute:power_state/Value:suspended+' => '',
));

//
// Class: Server
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Server/Attribute:hostid' => 'ID Host vSphere',
	'Class:Server/Attribute:hostid+' => 'ID vSphere du serveur',
));

//
// Class: lnkDatastoreToVirtualHost
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkDatastoreToVirtualHost' => 'Lien Datastore / Hôte Virtuel',
	'Class:lnkDatastoreToVirtualHost+' => '',
	'Class:lnkDatastoreToVirtualHost/Name' => '%1$s / %2$s',
	'Class:lnkDatastoreToVirtualHost/Attribute:datastore_id' => 'Datastore',
	'Class:lnkDatastoreToVirtualHost/Attribute:datastore_id+' => '',
	'Class:lnkDatastoreToVirtualHost/Attribute:datastore_name' => 'Nom du Datastore',
	'Class:lnkDatastoreToVirtualHost/Attribute:datastore_name+' => '',
	'Class:lnkDatastoreToVirtualHost/Attribute:virtualhost_id' => 'Hôte Virtuel',
	'Class:lnkDatastoreToVirtualHost/Attribute:virtualhost_id+' => '',
	'Class:lnkDatastoreToVirtualHost/Attribute:virtualhost_name' => 'Nom de l\'Hôte Virtuel',
	'Class:lnkDatastoreToVirtualHost/Attribute:virtualhost_name+' => '',
));

//
// Class: lnkDatastoreToVirtualMachine
//

Dict::Add('FR FR', 'French', 'Français', array(
    'Class:lnkDatastoreToVirtualMachine' => 'Lien Datastore / Machine Virtuelle',
    'Class:lnkDatastoreToVirtualMachine+' => '',
    'Class:lnkDatastoreToVirtualMachine/Name' => '%1$s / %2$s',
    'Class:lnkDatastoreToVirtualMachine/Attribute:datastore_id' => 'Datastore',
    'Class:lnkDatastoreToVirtualMachine/Attribute:datastore_id+' => '',
    'Class:lnkDatastoreToVirtualMachine/Attribute:datastore_name' => 'Nom du Datastore',
    'Class:lnkDatastoreToVirtualMachine/Attribute:datastore_name+' => '',
    'Class:lnkDatastoreToVirtualMachine/Attribute:virtualmachine_id' => 'Machine Virtuelle',
    'Class:lnkDatastoreToVirtualMachine/Attribute:virtualmachine_id+' => '',
    'Class:lnkDatastoreToVirtualMachine/Attribute:virtualhost_name' => 'Nom de la Machine Virtuelle',
    'Class:lnkDatastoreToVirtualMachine/Attribute:virtualhost_name+' => '',
));

//
// Actions
//

Dict::Add('FR FR', 'French', 'Français', array(
	'UI:VirtualizationManagement:Action:CreateOrUpdate:Datastore:PointToHypervisorAndVirtualHost' => 'Un Datastore ne peut être attaché à la fois à un Hyperviseur et à un Système de stockage !',
));
