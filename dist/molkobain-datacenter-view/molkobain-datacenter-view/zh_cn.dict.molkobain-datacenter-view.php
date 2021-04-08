<?php
/**
 * Copyright (c) 2015 - 2020 Molkobain.
 *
 * This file is part of licensed extension.
 *
 * Use of this extension is bound by the license you purchased. A license grants you a non-exclusive and non-transferable right to use and incorporate the item in your personal or commercial projects. There are several licenses available (see https://www.molkobain.com/usage-licenses/ for more informations)
 */

if(!isset($aMolkobainThesaurus)) $aMolkobainThesaurus = [];
/** @var array $aMolkobainThesaurus Used to centralize from strings and use them in the dict. entries */
$aMolkobainThesaurus = array_merge($aMolkobainThesaurus, [
	// Datamodel
	'Class/Attribute:nb_u' => '高度',
	'Class/Attribute:nb_u+' => 'Height in units (U) of %1$s',
	'Class/Attribute:position_v' => '位置',
	'Class/Attribute:position_v+/Variant:host' => 'Vertical position (U) of %1$s in %2$s (必须是底部位置，而非顶部)',
	'Class/Attribute:position_v+/Variant:device' => 'Vertical position (U) of %1$s in the enclosure (or rack if mounted directly on int). (Must be the bottom position, not top)',

	// Fieldsets
	'Fieldset:baseinfo' => '一般信息',
	'Fieldset:moreinfo' => '更多信息',
	'Fieldset:otherinfo' => '其他信息',
	'Fieldset:dates' => '日期',
]);

// Classes
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	// - LocationType
	'Class:LocationType' => '位置类型',
	'Class:LocationType/Attribute:name' => '名称',
	'Class:LocationType/Attribute:name+' => '例如: 国家, 省份, 城市, 建筑, 楼层, 房间, ...',
	'Class:LocationType/Attribute:locations_list' => '位置',
	'Class:LocationType/Attribute:locations_list+' => '列出所有这类位置',
	// - Location
	'Class:Location/Attribute:locationtype_id' => '类型',
	'Class:Location/Attribute:locationtype_id+' => '是那类位置或其目的是什么?',
	'Class:Location/Attribute:parent_id' => '父级',
	'Class:Location/Attribute:parent_id+' => '该位置的父级 (例如 对于 \'房间\', 其父级应该为\'楼层\' 或  \'建筑\')',
	'Class:Location/Attribute:locations_list' => '子级 ？,
	'Class:Location/Attribute:locations_list+' => '列出所有下属的位置',
	// - PhysicalDevice (default entries for custom classes)
	'Class:PhysicalDevice/Attribute:nb_u' => sprintf($aMolkobainThesaurus['Class/Attribute:nb_u']),
	'Class:PhysicalDevice/Attribute:nb_u+' => sprintf($aMolkobainThesaurus['Class/Attribute:nb_u+'], 'the element'),
	'Class:PhysicalDevice/Attribute:position_v' => sprintf($aMolkobainThesaurus['Class/Attribute:position_v']),
	// Note: Physical device can be either an host (eg. enclosure) or a device (eg. server), so we use a generic sentence
	'Class:PhysicalDevice/Attribute:position_v+' => sprintf($aMolkobainThesaurus['Class/Attribute:position_v+/Variant:host'], 'the element', 'its host'),
	// - Rack
	'Class:Rack/Attribute:nb_u' => sprintf($aMolkobainThesaurus['Class/Attribute:nb_u']),
	'Class:Rack/Attribute:nb_u+' => sprintf($aMolkobainThesaurus['Class/Attribute:nb_u+'], 'the rack'),
	// - Enclosure
	'Class:Enclosure/Attribute:nb_u' => sprintf($aMolkobainThesaurus['Class/Attribute:nb_u']),
	'Class:Enclosure/Attribute:nb_u+' => sprintf($aMolkobainThesaurus['Class/Attribute:nb_u+'], 'the enclosure'),
	'Class:Enclosure/Attribute:position_v' => sprintf($aMolkobainThesaurus['Class/Attribute:position_v']),
	'Class:Enclosure/Attribute:position_v+' => sprintf($aMolkobainThesaurus['Class/Attribute:position_v+/Variant:host'], 'the enclosure', 'the rack'),
	'Enclosure:baseinfo' => sprintf($aMolkobainThesaurus['Fieldset:baseinfo']),
	'Enclosure:moreinfo' => sprintf($aMolkobainThesaurus['Fieldset:moreinfo']),
	'Enclosure:otherinfo' => sprintf($aMolkobainThesaurus['Fieldset:otherinfo']),
	'Enclosure:dates' => sprintf($aMolkobainThesaurus['Fieldset:dates']),
	// - Datacenter device
	'Class:DatacenterDevice/Attribute:nb_u' => sprintf($aMolkobainThesaurus['Class/Attribute:nb_u']),
	'Class:DatacenterDevice/Attribute:nb_u+' => sprintf($aMolkobainThesaurus['Class/Attribute:nb_u+'], 'the device'),
	'Class:DatacenterDevice/Attribute:position_v' => sprintf($aMolkobainThesaurus['Class/Attribute:position_v']),
	'Class:DatacenterDevice/Attribute:position_v+' => sprintf($aMolkobainThesaurus['Class/Attribute:position_v+/Variant:device'], 'the device'),
	// - PDU
	'Class:PDU/Attribute:nb_u' => sprintf($aMolkobainThesaurus['Class/Attribute:nb_u']),
	'Class:PDU/Attribute:nb_u+' => sprintf($aMolkobainThesaurus['Class/Attribute:nb_u+'], 'the device'),
	'Class:PDU/Attribute:position_v' => sprintf($aMolkobainThesaurus['Class/Attribute:position_v']),
	'Class:PDU/Attribute:position_v+' => sprintf($aMolkobainThesaurus['Class/Attribute:position_v+/Variant:device'], 'the PDU'),
));

// UI
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Molkobain:DatacenterView:Tabs:View:Title' => '图示',
	'Molkobain:DatacenterView:NoElement' => '没有内容',
	// - Legend
	'Molkobain:DatacenterView:Legend:Title' => '图例',
	// - Filter
	'Molkobain:DatacenterView:Filter:Title' => '过滤',
	'Molkobain:DatacenterView:Filter:Description' => '选择对应的名称或序列号/资产编号',
	'Molkobain:DatacenterView:Filter:Input:Placeholder' => '例如 PDU, Backup, 1234, ...',
	// - Options
	'Molkobain:DatacenterView:Options:Title' => '选项',
	'Molkobain:DatacenterView:Options:Option:ShowObsolete' => '显示废弃内容',
	'Molkobain:DatacenterView:Options:Option:ShowObsolete+' => 'Changing value will override the global user preference for this element only',
	// - Tooltip
	'Molkobain:DatacenterView:Element:Tooltip:Fieldset:base-info' => sprintf($aMolkobainThesaurus['Fieldset:baseinfo']),
	'Molkobain:DatacenterView:Element:Tooltip:Fieldset:more-info' => sprintf($aMolkobainThesaurus['Fieldset:moreinfo']),
	// - Rack
	'Molkobain:DatacenterView:Rack:Panel:Front:Title' => '正面',
	// - Enclosure
	'Molkobain:DatacenterView:Enclosure:Panel:Front:Title' => '正面',
	// - Unmounted elements
	'Molkobain:DatacenterView:Unmounted:Toggler:Tooltip' => '折叠 / 展开',
	'Molkobain:DatacenterView:Unmounted:Enclosures:Title' => '未上架的机位',
	'Molkobain:DatacenterView:Unmounted:Enclosures:Title+' => '关联到本机柜但没有设定位置(编辑机位来设定)',
	'Molkobain:DatacenterView:Unmounted:Devices:Title' => '未上架的设备',
	'Molkobain:DatacenterView:Unmounted:Devices:Title+' => '关联到本机柜 / 机位但没有设定位置 (编辑设备来设定)',
));
