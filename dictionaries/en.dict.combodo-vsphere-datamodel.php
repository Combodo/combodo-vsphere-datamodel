<?php

//
// Class: DataStore
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Datastore' => 'Datastore',
	'Class:Datastore+' => '',
	'Class:Datastore/Name' => '%1$s',
	'Class:Datastore:baseinfo' => 'General Information',
	'Class:Datastore:date' => 'Dates',
	'Class:Datastore:local' => 'Local Storage',
	'Class:Datastore:network' => 'Network Storage',
	'Class:Datastore/Attribute:finalclass' => 'Class',
	'Class:Datastore/Attribute:finalclass+' => '',
	'Class:Datastore/Attribute:name' => 'Name',
	'Class:Datastore/Attribute:name+' => '',
	'Class:Datastore/Attribute:uuid' => 'UUID',
	'Class:Datastore/Attribute:uuid+' => 'Universal Unique IDentifier of the Datastore',
	'Class:Datastore/Attribute:org_id' => 'Organization',
	'Class:Datastore/Attribute:org_id+' => 'Organization that the Datastore is attached to',
	'Class:Datastore/Attribute:type' => 'Type',
	'Class:Datastore/Attribute:type+' => 'File system that the datastore uses',
	'Class:Datastore/Attribute:type/Value:vmfs' => 'VMFS',
	'Class:Datastore/Attribute:type/Value:vmfs+' => 'Virtual Machine File System',
	'Class:Datastore/Attribute:type/Value:nfs' => 'NFS',
	'Class:Datastore/Attribute:type/Value:nfs+' => 'Network File System',
	'Class:Datastore/Attribute:type/Value:vsan' => 'vSAN',
	'Class:Datastore/Attribute:type/Value:vsan+' => '',
	'Class:Datastore/Attribute:type/Value:vvol' => 'vVol',
	'Class:Datastore/Attribute:type/Value:vvol+' => 'Virtual Volume',
	'Class:Datastore/Attribute:capacity' => 'Capacity (GB)',
	'Class:Datastore/Attribute:length+' => 'Total capacity of the Datastore, in Giga Bytes',
	'Class:Datastore/Attribute:description' => 'Description',
	'Class:Datastore/Attribute:description+' => '',
	'Class:Datastore/Attribute:hypervisor_id' => 'Hypervisor',
	'Class:Datastore/Attribute:hypervisor_id+' => 'Hypervisor used for the local storage. This attribute cannot be filled at the same time as the Storage System one',
	'Class:Datastore/Attribute:location_id' => 'Location',
	'Class:Datastore/Attribute:location_id+' => 'Location of the storage system',
	'Class:Datastore/Attribute:storagesystem_id' => 'Storage System',
	'Class:Datastore/Attribute:storagesystem_id+' => 'External storage system. This attribute cannot be filled at the same time as the Hypervisor one',
	'Class:Datastore/Attribute:virtualhosts_list' => 'Virtual Hosts',
	'Class:Datastore/Attribute:virtualhosts_list+' => 'Hosts where the datastore is mounted',
	'Class:Datastore/Attribute:mountingpoint' => 'Mounting point',
	'Class:Datastore/Attribute:mountingpoint+' => '',
	'Class:Datastore/Attribute:move2production' => 'Move to production date',
	'Class:Datastore/Attribute:move2production+' => '',
));

//
// Class: Hypervisor
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Hypervisor/Attribute:uuid' => 'UUID',
	'Class:Hypervisor/Attribute:uuid+' => 'Universal Unique IDentifier of the virtual machine',
	'Class:Hypervisor/Attribute:hostid' => 'vSphere Host ID',
	'Class:Hypervisor/Attribute:hostid+' => 'vSphere ID of the Hypervisor',
	'Class:Hypervisor/Attribute:datastores_list' => 'Datastores',
	'Class:Hypervisor/Attribute:datastores_list+' => 'Datastores using the hypervisor as local storage',
));

//
// Class: StorageSystem
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:StorageSystem/Attribute:datastores_list' => 'Datastores',
	'Class:StorageSystem/Attribute:datastores_list+' => 'Datastores using the storage system as network storage',
));

//
// Class: VirtualMachine
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:VirtualMachine/Attribute:uuid' => 'UUID',
	'Class:VirtualMachine/Attribute:uuid+' => 'Universal Unique IDentifier of the virtual machine',
));

//
// Class: Server
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Server/Attribute:hostid' => 'vSphere Host ID',
	'Class:Server/Attribute:hostid+' => 'vSphere ID of the Server',
));

//
// Class: lnkDatastoreToVirtualHost
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDatastoreToVirtualHost' => 'Link Datastore / Virtual Host',
	'Class:lnkDatastoreToVirtualHost+' => '',
	'Class:lnkDatastoreToVirtualHost/Name' => '%1$s / %2$s',
	'Class:lnkDatastoreToVirtualHost/Attribute:datastore_id' => 'Datastore',
	'Class:lnkDatastoreToVirtualHost/Attribute:datastore_id+' => '',
	'Class:lnkDatastoreToVirtualHost/Attribute:datastore_name' => 'Datastore name',
	'Class:lnkDatastoreToVirtualHost/Attribute:datastore_name+' => '',
	'Class:lnkDatastoreToVirtualHost/Attribute:virtualhost_id' => 'Virtual Host',
	'Class:lnkDatastoreToVirtualHost/Attribute:virtualhost_id+' => '',
	'Class:lnkDatastoreToVirtualHost/Attribute:virtualhost_name' => 'Virtual Host nmae',
	'Class:lnkDatastoreToVirtualHost/Attribute:virtualhost_name+' => '',
));

//
// Actions
//

Dict::Add('EN US', 'English', 'English', array(
	'UI:VirtualizationManagement:Action:CreateOrUpdate:Datastore:PointToHypervisorAndVirtualHost' => 'A Datastore cannot be attached to both an Hypervisor and a Storage System!',
));
