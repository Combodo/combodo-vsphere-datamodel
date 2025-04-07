# Extension Data model for vSphere

## About

Next to the virtualization objects contained within 
[iTop's default datamodel](https://www.itophub.io/wiki/page?id=3_1_0:datamodel:itop-virtualization-mgmt), 
this extension brings new virtualization classes (like datastores) and enriches existing ones by 
adding new attributes to them (like uuid or power_state to VMs).

For an optimal usage, this extension should be used with the 
[Data collector for vSphere](https://www.itophub.io/wiki/page?id=extensions:vsphere-data-collector) that 
will automatically and regularly discover vSphere objects in their environement and load them in iTop. 
This ETL will insure that your data are always up to date in iTop.

More information about this module can be found at the corresponding 
[extension documentation](https://store.itophub.io/en_US/products/combodo-vsphere-datamodel).

## Download

Release packages can be found on the [iTop Hub Store](https://store.itophub.io/en_US/taxons/all-extensions). This is the best way to get a
running package as those contain all the needed modules and stable code.

When downloading directly from GitHub (by cloning or downloading as zip) you will get potentially unstable 
code, and you will miss additional modules.

## About Us

This iTop module development is sponsored, led and supported by [Combodo](https://www.combodo.com).

