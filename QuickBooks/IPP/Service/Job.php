<?php

/**
 *
 *
 * Copyright (c) 2010 Keith Palmer / ConsoliBYTE, LLC.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.opensource.org/licenses/eclipse-1.0.php
 *
 * @license LICENSE.txt
 * @author Keith Palmer <Keith@ConsoliBYTE.com>
 *
 * @package QuickBooks
 * @subpackage IPP
 */


QuickBooks_Loader::load('/QuickBooks/IPP/Service.php');

class QuickBooks_IPP_Service_Job extends QuickBooks_IPP_Service
{
	public function findAll($Context, $realmID, $query = null, $page = 1, $size = 50, $options = array())
	{
		return parent::_findAll($Context, $realmID, QuickBooks_IPP_IDS::RESOURCE_JOB, $query, null, $page, $size, '', $options);
	}
}