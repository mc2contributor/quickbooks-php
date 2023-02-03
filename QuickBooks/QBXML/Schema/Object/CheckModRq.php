<?php

/**
 * Schema object for: CheckModRq
 *
 * @author "Keith Palmer Jr." <Keith@ConsoliByte.com>
 * @license LICENSE.txt
 *
 * @package QuickBooks
 * @subpackage QBXML
 */

/**
 *
 */
require_once 'QuickBooks.php';

/**
 *
 */
require_once 'QuickBooks/QBXML/Schema/Object.php';

/**
 *
 */
class QuickBooks_QBXML_Schema_Object_CheckModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'CheckMod';

		return $wrapper;
	}

	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TxnID' => 'IDTYPE',
  'EditSequence' => 'STRTYPE',
  'AccountRef ListID' => 'IDTYPE',
  'AccountRef FullName' => 'STRTYPE',
  'PayeeEntityRef ListID' => 'IDTYPE',
  'PayeeEntityRef FullName' => 'STRTYPE',
  'RefNumber' => 'STRTYPE',
  'TxnDate' => 'DATETYPE',
  'Memo' => 'STRTYPE',
  'Address Addr1' => 'STRTYPE',
  'Address Addr2' => 'STRTYPE',
  'Address Addr3' => 'STRTYPE',
  'Address Addr4' => 'STRTYPE',
  'Address Addr5' => 'STRTYPE',
  'Address City' => 'STRTYPE',
  'Address State' => 'STRTYPE',
  'Address PostalCode' => 'STRTYPE',
  'Address Country' => 'STRTYPE',
  'Address Note' => 'STRTYPE',
  'IsToBePrinted' => 'BOOLTYPE',
  'IsTaxIncluded' => 'BOOLTYPE',
  'SalesTaxCodeRef ListID' => 'IDTYPE',
  'SalesTaxCodeRef FullName' => 'STRTYPE',
  'ApplyCheckToTxnMod TxnID' => 'IDTYPE',
  'ApplyCheckToTxnMod Amount' => 'AMTTYPE',
  'ClearExpenseLines' => 'BOOLTYPE',
  'ExpenseLineMod TxnLineID' => 'IDTYPE',
  'ExpenseLineMod AccountRef ListID' => 'IDTYPE',
  'ExpenseLineMod AccountRef FullName' => 'STRTYPE',
  'ExpenseLineMod Amount' => 'AMTTYPE',
  'ExpenseLineMod TaxAmount' => 'AMTTYPE',
  'ExpenseLineMod Memo' => 'STRTYPE',
  'ExpenseLineMod CustomerRef ListID' => 'IDTYPE',
  'ExpenseLineMod CustomerRef FullName' => 'STRTYPE',
  'ExpenseLineMod ClassRef ListID' => 'IDTYPE',
  'ExpenseLineMod ClassRef FullName' => 'STRTYPE',
  'ExpenseLineMod SalesTaxCodeRef ListID' => 'IDTYPE',
  'ExpenseLineMod SalesTaxCodeRef FullName' => 'STRTYPE',
  'ExpenseLineMod BillableStatus' => 'ENUMTYPE',
  'ClearItemLines' => 'BOOLTYPE',
  'ItemLineMod TxnLineID' => 'IDTYPE',
  'ItemLineMod ItemRef ListID' => 'IDTYPE',
  'ItemLineMod ItemRef FullName' => 'STRTYPE',
  'ItemLineMod Desc' => 'STRTYPE',
  'ItemLineMod Quantity' => 'QUANTYPE',
  'ItemLineMod UnitOfMeasure' => 'STRTYPE',
  'ItemLineMod OverrideUOMSetRef ListID' => 'IDTYPE',
  'ItemLineMod OverrideUOMSetRef FullName' => 'STRTYPE',
  'ItemLineMod Cost' => 'PRICETYPE',
  'ItemLineMod Amount' => 'AMTTYPE',
  'ItemLineMod TaxAmount' => 'AMTTYPE',
  'ItemLineMod CustomerRef ListID' => 'IDTYPE',
  'ItemLineMod CustomerRef FullName' => 'STRTYPE',
  'ItemLineMod ClassRef ListID' => 'IDTYPE',
  'ItemLineMod ClassRef FullName' => 'STRTYPE',
  'ItemLineMod SalesTaxCodeRef ListID' => 'IDTYPE',
  'ItemLineMod SalesTaxCodeRef FullName' => 'STRTYPE',
  'ItemLineMod BillableStatus' => 'ENUMTYPE',
  'ItemLineMod OverrideItemAccountRef ListID' => 'IDTYPE',
  'ItemLineMod OverrideItemAccountRef FullName' => 'STRTYPE',
  'ItemGroupLineMod TxnLineID' => 'IDTYPE',
  'ItemGroupLineMod ItemGroupRef ListID' => 'IDTYPE',
  'ItemGroupLineMod ItemGroupRef FullName' => 'STRTYPE',
  'ItemGroupLineMod Quantity' => 'QUANTYPE',
  'ItemGroupLineMod UnitOfMeasure' => 'STRTYPE',
  'ItemGroupLineMod OverrideUOMSetRef ListID' => 'IDTYPE',
  'ItemGroupLineMod OverrideUOMSetRef FullName' => 'STRTYPE',
  'ItemGroupLineMod ItemLineMod TxnLineID' => 'IDTYPE',
  'ItemGroupLineMod ItemLineMod ItemRef ListID' => 'IDTYPE',
  'ItemGroupLineMod ItemLineMod ItemRef FullName' => 'STRTYPE',
  'ItemGroupLineMod ItemLineMod Desc' => 'STRTYPE',
  'ItemGroupLineMod ItemLineMod Quantity' => 'QUANTYPE',
  'ItemGroupLineMod ItemLineMod UnitOfMeasure' => 'STRTYPE',
  'ItemGroupLineMod ItemLineMod OverrideUOMSetRef ListID' => 'IDTYPE',
  'ItemGroupLineMod ItemLineMod OverrideUOMSetRef FullName' => 'STRTYPE',
  'ItemGroupLineMod ItemLineMod Cost' => 'PRICETYPE',
  'ItemGroupLineMod ItemLineMod Amount' => 'AMTTYPE',
  'ItemGroupLineMod ItemLineMod TaxAmount' => 'AMTTYPE',
  'ItemGroupLineMod ItemLineMod CustomerRef ListID' => 'IDTYPE',
  'ItemGroupLineMod ItemLineMod CustomerRef FullName' => 'STRTYPE',
  'ItemGroupLineMod ItemLineMod ClassRef ListID' => 'IDTYPE',
  'ItemGroupLineMod ItemLineMod ClassRef FullName' => 'STRTYPE',
  'ItemGroupLineMod ItemLineMod SalesTaxCodeRef ListID' => 'IDTYPE',
  'ItemGroupLineMod ItemLineMod SalesTaxCodeRef FullName' => 'STRTYPE',
  'ItemGroupLineMod ItemLineMod BillableStatus' => 'ENUMTYPE',
  'ItemGroupLineMod ItemLineMod OverrideItemAccountRef ListID' => 'IDTYPE',
  'ItemGroupLineMod ItemLineMod OverrideItemAccountRef FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);

		return $paths;
	}

	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'TxnID' => 0,
  'EditSequence' => 16,
  'AccountRef ListID' => 0,
  'AccountRef FullName' => 159,
  'PayeeEntityRef ListID' => 0,
  'PayeeEntityRef FullName' => 159,
  'RefNumber' => 11,
  'TxnDate' => 0,
  'Memo' => 4095,
  'Address Addr1' => 41,
  'Address Addr2' => 41,
  'Address Addr3' => 41,
  'Address Addr4' => 41,
  'Address Addr5' => 41,
  'Address City' => 31,
  'Address State' => 21,
  'Address PostalCode' => 13,
  'Address Country' => 31,
  'Address Note' => 41,
  'IsToBePrinted' => 0,
  'IsTaxIncluded' => 0,
  'SalesTaxCodeRef ListID' => 0,
  'SalesTaxCodeRef FullName' => 159,
  'ApplyCheckToTxnMod TxnID' => 0,
  'ApplyCheckToTxnMod Amount' => 0,
  'ClearExpenseLines' => 0,
  'ExpenseLineMod TxnLineID' => 0,
  'ExpenseLineMod AccountRef ListID' => 0,
  'ExpenseLineMod AccountRef FullName' => 159,
  'ExpenseLineMod Amount' => 0,
  'ExpenseLineMod TaxAmount' => 0,
  'ExpenseLineMod Memo' => 4095,
  'ExpenseLineMod CustomerRef ListID' => 0,
  'ExpenseLineMod CustomerRef FullName' => 159,
  'ExpenseLineMod ClassRef ListID' => 0,
  'ExpenseLineMod ClassRef FullName' => 159,
  'ExpenseLineMod SalesTaxCodeRef ListID' => 0,
  'ExpenseLineMod SalesTaxCodeRef FullName' => 159,
  'ExpenseLineMod BillableStatus' => 0,
  'ClearItemLines' => 0,
  'ItemLineMod TxnLineID' => 0,
  'ItemLineMod ItemRef ListID' => 0,
  'ItemLineMod ItemRef FullName' => 159,
  'ItemLineMod Desc' => 4095,
  'ItemLineMod Quantity' => 0,
  'ItemLineMod UnitOfMeasure' => 31,
  'ItemLineMod OverrideUOMSetRef ListID' => 0,
  'ItemLineMod OverrideUOMSetRef FullName' => 159,
  'ItemLineMod Cost' => 0,
  'ItemLineMod Amount' => 0,
  'ItemLineMod TaxAmount' => 0,
  'ItemLineMod CustomerRef ListID' => 0,
  'ItemLineMod CustomerRef FullName' => 159,
  'ItemLineMod ClassRef ListID' => 0,
  'ItemLineMod ClassRef FullName' => 159,
  'ItemLineMod SalesTaxCodeRef ListID' => 0,
  'ItemLineMod SalesTaxCodeRef FullName' => 159,
  'ItemLineMod BillableStatus' => 0,
  'ItemLineMod OverrideItemAccountRef ListID' => 0,
  'ItemLineMod OverrideItemAccountRef FullName' => 159,
  'ItemGroupLineMod TxnLineID' => 0,
  'ItemGroupLineMod ItemGroupRef ListID' => 0,
  'ItemGroupLineMod ItemGroupRef FullName' => 159,
  'ItemGroupLineMod Quantity' => 0,
  'ItemGroupLineMod UnitOfMeasure' => 31,
  'ItemGroupLineMod OverrideUOMSetRef ListID' => 0,
  'ItemGroupLineMod OverrideUOMSetRef FullName' => 159,
  'ItemGroupLineMod ItemLineMod TxnLineID' => 0,
  'ItemGroupLineMod ItemLineMod ItemRef ListID' => 0,
  'ItemGroupLineMod ItemLineMod ItemRef FullName' => 159,
  'ItemGroupLineMod ItemLineMod Desc' => 4095,
  'ItemGroupLineMod ItemLineMod Quantity' => 0,
  'ItemGroupLineMod ItemLineMod UnitOfMeasure' => 31,
  'ItemGroupLineMod ItemLineMod OverrideUOMSetRef ListID' => 0,
  'ItemGroupLineMod ItemLineMod OverrideUOMSetRef FullName' => 159,
  'ItemGroupLineMod ItemLineMod Cost' => 0,
  'ItemGroupLineMod ItemLineMod Amount' => 0,
  'ItemGroupLineMod ItemLineMod TaxAmount' => 0,
  'ItemGroupLineMod ItemLineMod CustomerRef ListID' => 0,
  'ItemGroupLineMod ItemLineMod CustomerRef FullName' => 159,
  'ItemGroupLineMod ItemLineMod ClassRef ListID' => 0,
  'ItemGroupLineMod ItemLineMod ClassRef FullName' => 159,
  'ItemGroupLineMod ItemLineMod SalesTaxCodeRef ListID' => 0,
  'ItemGroupLineMod ItemLineMod SalesTaxCodeRef FullName' => 159,
  'ItemGroupLineMod ItemLineMod BillableStatus' => 0,
  'ItemGroupLineMod ItemLineMod OverrideItemAccountRef ListID' => 0,
  'ItemGroupLineMod ItemLineMod OverrideItemAccountRef FullName' => 159,
  'IncludeRetElement' => 50,
);

		return $paths;
	}

	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TxnID' => false,
  'EditSequence' => false,
  'AccountRef ListID' => true,
  'AccountRef FullName' => true,
  'PayeeEntityRef ListID' => true,
  'PayeeEntityRef FullName' => true,
  'RefNumber' => true,
  'TxnDate' => true,
  'Memo' => true,
  'Address Addr1' => true,
  'Address Addr2' => true,
  'Address Addr3' => true,
  'Address Addr4' => true,
  'Address Addr5' => true,
  'Address City' => true,
  'Address State' => true,
  'Address PostalCode' => true,
  'Address Country' => true,
  'Address Note' => true,
  'IsToBePrinted' => true,
  'IsTaxIncluded' => true,
  'SalesTaxCodeRef ListID' => true,
  'SalesTaxCodeRef FullName' => true,
  'ApplyCheckToTxnMod TxnID' => false,
  'ApplyCheckToTxnMod Amount' => true,
  'ClearExpenseLines' => true,
  'ExpenseLineMod TxnLineID' => false,
  'ExpenseLineMod AccountRef ListID' => true,
  'ExpenseLineMod AccountRef FullName' => true,
  'ExpenseLineMod Amount' => true,
  'ExpenseLineMod TaxAmount' => true,
  'ExpenseLineMod Memo' => true,
  'ExpenseLineMod CustomerRef ListID' => true,
  'ExpenseLineMod CustomerRef FullName' => true,
  'ExpenseLineMod ClassRef ListID' => true,
  'ExpenseLineMod ClassRef FullName' => true,
  'ExpenseLineMod SalesTaxCodeRef ListID' => true,
  'ExpenseLineMod SalesTaxCodeRef FullName' => true,
  'ExpenseLineMod BillableStatus' => true,
  'ClearItemLines' => true,
  'ItemLineMod TxnLineID' => false,
  'ItemLineMod ItemRef ListID' => true,
  'ItemLineMod ItemRef FullName' => true,
  'ItemLineMod Desc' => true,
  'ItemLineMod Quantity' => true,
  'ItemLineMod UnitOfMeasure' => true,
  'ItemLineMod OverrideUOMSetRef ListID' => true,
  'ItemLineMod OverrideUOMSetRef FullName' => true,
  'ItemLineMod Cost' => true,
  'ItemLineMod Amount' => true,
  'ItemLineMod TaxAmount' => true,
  'ItemLineMod CustomerRef ListID' => true,
  'ItemLineMod CustomerRef FullName' => true,
  'ItemLineMod ClassRef ListID' => true,
  'ItemLineMod ClassRef FullName' => true,
  'ItemLineMod SalesTaxCodeRef ListID' => true,
  'ItemLineMod SalesTaxCodeRef FullName' => true,
  'ItemLineMod BillableStatus' => true,
  'ItemLineMod OverrideItemAccountRef ListID' => true,
  'ItemLineMod OverrideItemAccountRef FullName' => true,
  'ItemGroupLineMod TxnLineID' => false,
  'ItemGroupLineMod ItemGroupRef ListID' => true,
  'ItemGroupLineMod ItemGroupRef FullName' => true,
  'ItemGroupLineMod Quantity' => true,
  'ItemGroupLineMod UnitOfMeasure' => true,
  'ItemGroupLineMod OverrideUOMSetRef ListID' => true,
  'ItemGroupLineMod OverrideUOMSetRef FullName' => true,
  'ItemGroupLineMod ItemLineMod TxnLineID' => false,
  'ItemGroupLineMod ItemLineMod ItemRef ListID' => true,
  'ItemGroupLineMod ItemLineMod ItemRef FullName' => true,
  'ItemGroupLineMod ItemLineMod Desc' => true,
  'ItemGroupLineMod ItemLineMod Quantity' => true,
  'ItemGroupLineMod ItemLineMod UnitOfMeasure' => true,
  'ItemGroupLineMod ItemLineMod OverrideUOMSetRef ListID' => true,
  'ItemGroupLineMod ItemLineMod OverrideUOMSetRef FullName' => true,
  'ItemGroupLineMod ItemLineMod Cost' => true,
  'ItemGroupLineMod ItemLineMod Amount' => true,
  'ItemGroupLineMod ItemLineMod TaxAmount' => true,
  'ItemGroupLineMod ItemLineMod CustomerRef ListID' => true,
  'ItemGroupLineMod ItemLineMod CustomerRef FullName' => true,
  'ItemGroupLineMod ItemLineMod ClassRef ListID' => true,
  'ItemGroupLineMod ItemLineMod ClassRef FullName' => true,
  'ItemGroupLineMod ItemLineMod SalesTaxCodeRef ListID' => true,
  'ItemGroupLineMod ItemLineMod SalesTaxCodeRef FullName' => true,
  'ItemGroupLineMod ItemLineMod BillableStatus' => true,
  'ItemGroupLineMod ItemLineMod OverrideItemAccountRef ListID' => true,
  'ItemGroupLineMod ItemLineMod OverrideItemAccountRef FullName' => true,
  'IncludeRetElement' => true,
);
	}

	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TxnID' => 999.99,
  'EditSequence' => 999.99,
  'AccountRef ListID' => 999.99,
  'AccountRef FullName' => 999.99,
  'PayeeEntityRef ListID' => 999.99,
  'PayeeEntityRef FullName' => 999.99,
  'RefNumber' => 999.99,
  'TxnDate' => 999.99,
  'Memo' => 999.99,
  'Address Addr1' => 999.99,
  'Address Addr2' => 999.99,
  'Address Addr3' => 999.99,
  'Address Addr4' => 2,
  'Address Addr5' => 6,
  'Address City' => 999.99,
  'Address State' => 999.99,
  'Address PostalCode' => 999.99,
  'Address Country' => 999.99,
  'Address Note' => 6,
  'IsToBePrinted' => 999.99,
  'IsTaxIncluded' => 6,
  'SalesTaxCodeRef ListID' => 999.99,
  'SalesTaxCodeRef FullName' => 999.99,
  'ApplyCheckToTxnMod TxnID' => 999.99,
  'ApplyCheckToTxnMod Amount' => 999.99,
  'ClearExpenseLines' => 999.99,
  'ExpenseLineMod TxnLineID' => 999.99,
  'ExpenseLineMod AccountRef ListID' => 999.99,
  'ExpenseLineMod AccountRef FullName' => 999.99,
  'ExpenseLineMod Amount' => 999.99,
  'ExpenseLineMod TaxAmount' => 6.1,
  'ExpenseLineMod Memo' => 999.99,
  'ExpenseLineMod CustomerRef ListID' => 999.99,
  'ExpenseLineMod CustomerRef FullName' => 999.99,
  'ExpenseLineMod ClassRef ListID' => 999.99,
  'ExpenseLineMod ClassRef FullName' => 999.99,
  'ExpenseLineMod SalesTaxCodeRef ListID' => 999.99,
  'ExpenseLineMod SalesTaxCodeRef FullName' => 999.99,
  'ExpenseLineMod BillableStatus' => 999.99,
  'ClearItemLines' => 999.99,
  'ItemLineMod TxnLineID' => 999.99,
  'ItemLineMod ItemRef ListID' => 999.99,
  'ItemLineMod ItemRef FullName' => 999.99,
  'ItemLineMod Desc' => 999.99,
  'ItemLineMod Quantity' => 999.99,
  'ItemLineMod UnitOfMeasure' => 7,
  'ItemLineMod OverrideUOMSetRef ListID' => 999.99,
  'ItemLineMod OverrideUOMSetRef FullName' => 999.99,
  'ItemLineMod Cost' => 999.99,
  'ItemLineMod Amount' => 999.99,
  'ItemLineMod TaxAmount' => 6.1,
  'ItemLineMod CustomerRef ListID' => 999.99,
  'ItemLineMod CustomerRef FullName' => 999.99,
  'ItemLineMod ClassRef ListID' => 999.99,
  'ItemLineMod ClassRef FullName' => 999.99,
  'ItemLineMod SalesTaxCodeRef ListID' => 999.99,
  'ItemLineMod SalesTaxCodeRef FullName' => 999.99,
  'ItemLineMod BillableStatus' => 999.99,
  'ItemLineMod OverrideItemAccountRef ListID' => 999.99,
  'ItemLineMod OverrideItemAccountRef FullName' => 999.99,
  'ItemGroupLineMod TxnLineID' => 999.99,
  'ItemGroupLineMod ItemGroupRef ListID' => 999.99,
  'ItemGroupLineMod ItemGroupRef FullName' => 999.99,
  'ItemGroupLineMod Quantity' => 999.99,
  'ItemGroupLineMod UnitOfMeasure' => 7,
  'ItemGroupLineMod OverrideUOMSetRef ListID' => 999.99,
  'ItemGroupLineMod OverrideUOMSetRef FullName' => 999.99,
  'ItemGroupLineMod ItemLineMod TxnLineID' => 999.99,
  'ItemGroupLineMod ItemLineMod ItemRef ListID' => 999.99,
  'ItemGroupLineMod ItemLineMod ItemRef FullName' => 999.99,
  'ItemGroupLineMod ItemLineMod Desc' => 999.99,
  'ItemGroupLineMod ItemLineMod Quantity' => 999.99,
  'ItemGroupLineMod ItemLineMod UnitOfMeasure' => 7,
  'ItemGroupLineMod ItemLineMod OverrideUOMSetRef ListID' => 999.99,
  'ItemGroupLineMod ItemLineMod OverrideUOMSetRef FullName' => 999.99,
  'ItemGroupLineMod ItemLineMod Cost' => 999.99,
  'ItemGroupLineMod ItemLineMod Amount' => 999.99,
  'ItemGroupLineMod ItemLineMod TaxAmount' => 6.1,
  'ItemGroupLineMod ItemLineMod CustomerRef ListID' => 999.99,
  'ItemGroupLineMod ItemLineMod CustomerRef FullName' => 999.99,
  'ItemGroupLineMod ItemLineMod ClassRef ListID' => 999.99,
  'ItemGroupLineMod ItemLineMod ClassRef FullName' => 999.99,
  'ItemGroupLineMod ItemLineMod SalesTaxCodeRef ListID' => 999.99,
  'ItemGroupLineMod ItemLineMod SalesTaxCodeRef FullName' => 999.99,
  'ItemGroupLineMod ItemLineMod BillableStatus' => 999.99,
  'ItemGroupLineMod ItemLineMod OverrideItemAccountRef ListID' => 999.99,
  'ItemGroupLineMod ItemLineMod OverrideItemAccountRef FullName' => 999.99,
  'IncludeRetElement' => 4,
);

		return $paths;
	}

	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TxnID' => false,
  'EditSequence' => false,
  'AccountRef ListID' => false,
  'AccountRef FullName' => false,
  'PayeeEntityRef ListID' => false,
  'PayeeEntityRef FullName' => false,
  'RefNumber' => false,
  'TxnDate' => false,
  'Memo' => false,
  'Address Addr1' => false,
  'Address Addr2' => false,
  'Address Addr3' => false,
  'Address Addr4' => false,
  'Address Addr5' => false,
  'Address City' => false,
  'Address State' => false,
  'Address PostalCode' => false,
  'Address Country' => false,
  'Address Note' => false,
  'IsToBePrinted' => false,
  'IsTaxIncluded' => false,
  'SalesTaxCodeRef ListID' => false,
  'SalesTaxCodeRef FullName' => false,
  'ApplyCheckToTxnMod TxnID' => false,
  'ApplyCheckToTxnMod Amount' => false,
  'ClearExpenseLines' => false,
  'ExpenseLineMod TxnLineID' => false,
  'ExpenseLineMod AccountRef ListID' => false,
  'ExpenseLineMod AccountRef FullName' => false,
  'ExpenseLineMod Amount' => false,
  'ExpenseLineMod TaxAmount' => false,
  'ExpenseLineMod Memo' => false,
  'ExpenseLineMod CustomerRef ListID' => false,
  'ExpenseLineMod CustomerRef FullName' => false,
  'ExpenseLineMod ClassRef ListID' => false,
  'ExpenseLineMod ClassRef FullName' => false,
  'ExpenseLineMod SalesTaxCodeRef ListID' => false,
  'ExpenseLineMod SalesTaxCodeRef FullName' => false,
  'ExpenseLineMod BillableStatus' => false,
  'ClearItemLines' => false,
  'ItemLineMod TxnLineID' => false,
  'ItemLineMod ItemRef ListID' => false,
  'ItemLineMod ItemRef FullName' => false,
  'ItemLineMod Desc' => false,
  'ItemLineMod Quantity' => false,
  'ItemLineMod UnitOfMeasure' => false,
  'ItemLineMod OverrideUOMSetRef ListID' => false,
  'ItemLineMod OverrideUOMSetRef FullName' => false,
  'ItemLineMod Cost' => false,
  'ItemLineMod Amount' => false,
  'ItemLineMod TaxAmount' => false,
  'ItemLineMod CustomerRef ListID' => false,
  'ItemLineMod CustomerRef FullName' => false,
  'ItemLineMod ClassRef ListID' => false,
  'ItemLineMod ClassRef FullName' => false,
  'ItemLineMod SalesTaxCodeRef ListID' => false,
  'ItemLineMod SalesTaxCodeRef FullName' => false,
  'ItemLineMod BillableStatus' => false,
  'ItemLineMod OverrideItemAccountRef ListID' => false,
  'ItemLineMod OverrideItemAccountRef FullName' => false,
  'ItemGroupLineMod TxnLineID' => false,
  'ItemGroupLineMod ItemGroupRef ListID' => false,
  'ItemGroupLineMod ItemGroupRef FullName' => false,
  'ItemGroupLineMod Quantity' => false,
  'ItemGroupLineMod UnitOfMeasure' => false,
  'ItemGroupLineMod OverrideUOMSetRef ListID' => false,
  'ItemGroupLineMod OverrideUOMSetRef FullName' => false,
  'ItemGroupLineMod ItemLineMod TxnLineID' => false,
  'ItemGroupLineMod ItemLineMod ItemRef ListID' => false,
  'ItemGroupLineMod ItemLineMod ItemRef FullName' => false,
  'ItemGroupLineMod ItemLineMod Desc' => false,
  'ItemGroupLineMod ItemLineMod Quantity' => false,
  'ItemGroupLineMod ItemLineMod UnitOfMeasure' => false,
  'ItemGroupLineMod ItemLineMod OverrideUOMSetRef ListID' => false,
  'ItemGroupLineMod ItemLineMod OverrideUOMSetRef FullName' => false,
  'ItemGroupLineMod ItemLineMod Cost' => false,
  'ItemGroupLineMod ItemLineMod Amount' => false,
  'ItemGroupLineMod ItemLineMod TaxAmount' => false,
  'ItemGroupLineMod ItemLineMod CustomerRef ListID' => false,
  'ItemGroupLineMod ItemLineMod CustomerRef FullName' => false,
  'ItemGroupLineMod ItemLineMod ClassRef ListID' => false,
  'ItemGroupLineMod ItemLineMod ClassRef FullName' => false,
  'ItemGroupLineMod ItemLineMod SalesTaxCodeRef ListID' => false,
  'ItemGroupLineMod ItemLineMod SalesTaxCodeRef FullName' => false,
  'ItemGroupLineMod ItemLineMod BillableStatus' => false,
  'ItemGroupLineMod ItemLineMod OverrideItemAccountRef ListID' => false,
  'ItemGroupLineMod ItemLineMod OverrideItemAccountRef FullName' => false,
  'IncludeRetElement' => true,
);

		return $paths;
	}

	/*
	abstract protected function &_inLocalePaths()
	{
		static $paths = array(
			'FirstName' => array( 'QBD', 'QBCA', 'QBUK', 'QBAU' ),
			'LastName' => array( 'QBD', 'QBCA', 'QBUK', 'QBAU' ),
			);

		return $paths;
	}
	*/

	protected function &_reorderPathsPaths()
	{
		static $paths = array (
  0 => 'TxnID',
  1 => 'EditSequence',
  2 => 'AccountRef ListID',
  3 => 'AccountRef FullName',
  4 => 'PayeeEntityRef ListID',
  5 => 'PayeeEntityRef FullName',
  6 => 'RefNumber',
  7 => 'TxnDate',
  8 => 'Memo',
  9 => 'Address Addr1',
  10 => 'Address Addr2',
  11 => 'Address Addr3',
  12 => 'Address Addr4',
  13 => 'Address Addr5',
  14 => 'Address City',
  15 => 'Address State',
  16 => 'Address PostalCode',
  17 => 'Address Country',
  18 => 'Address Note',
  19 => 'IsToBePrinted',
  20 => 'IsTaxIncluded',
  21 => 'SalesTaxCodeRef ListID',
  22 => 'SalesTaxCodeRef FullName',
  23 => 'ApplyCheckToTxnMod TxnID',
  24 => 'ApplyCheckToTxnMod Amount',
  25 => 'ClearExpenseLines',
  26 => 'ExpenseLineMod TxnLineID',
  27 => 'ExpenseLineMod AccountRef ListID',
  28 => 'ExpenseLineMod AccountRef FullName',
  29 => 'ExpenseLineMod Amount',
  30 => 'ExpenseLineMod TaxAmount',
  31 => 'ExpenseLineMod Memo',
  32 => 'ExpenseLineMod CustomerRef ListID',
  33 => 'ExpenseLineMod CustomerRef FullName',
  34 => 'ExpenseLineMod ClassRef ListID',
  35 => 'ExpenseLineMod ClassRef FullName',
  36 => 'ExpenseLineMod SalesTaxCodeRef ListID',
  37 => 'ExpenseLineMod SalesTaxCodeRef FullName',
  38 => 'ExpenseLineMod BillableStatus',
  39 => 'ClearItemLines',
  40 => 'ItemLineMod TxnLineID',
  41 => 'ItemLineMod ItemRef ListID',
  42 => 'ItemLineMod ItemRef FullName',
  43 => 'ItemLineMod Desc',
  44 => 'ItemLineMod Quantity',
  45 => 'ItemLineMod UnitOfMeasure',
  46 => 'ItemLineMod OverrideUOMSetRef ListID',
  47 => 'ItemLineMod OverrideUOMSetRef FullName',
  48 => 'ItemLineMod Cost',
  49 => 'ItemLineMod Amount',
  50 => 'ItemLineMod TaxAmount',
  51 => 'ItemLineMod CustomerRef ListID',
  52 => 'ItemLineMod CustomerRef FullName',
  53 => 'ItemLineMod ClassRef ListID',
  54 => 'ItemLineMod ClassRef FullName',
  55 => 'ItemLineMod SalesTaxCodeRef ListID',
  56 => 'ItemLineMod SalesTaxCodeRef FullName',
  57 => 'ItemLineMod BillableStatus',
  58 => 'ItemLineMod OverrideItemAccountRef ListID',
  59 => 'ItemLineMod OverrideItemAccountRef FullName',
  60 => 'ItemGroupLineMod TxnLineID',
  61 => 'ItemGroupLineMod ItemGroupRef ListID',
  62 => 'ItemGroupLineMod ItemGroupRef FullName',
  63 => 'ItemGroupLineMod Quantity',
  64 => 'ItemGroupLineMod UnitOfMeasure',
  65 => 'ItemGroupLineMod OverrideUOMSetRef ListID',
  66 => 'ItemGroupLineMod OverrideUOMSetRef FullName',
  67 => 'ItemGroupLineMod ItemLineMod TxnLineID',
  68 => 'ItemGroupLineMod ItemLineMod ItemRef ListID',
  69 => 'ItemGroupLineMod ItemLineMod ItemRef FullName',
  70 => 'ItemGroupLineMod ItemLineMod Desc',
  71 => 'ItemGroupLineMod ItemLineMod Quantity',
  72 => 'ItemGroupLineMod ItemLineMod UnitOfMeasure',
  73 => 'ItemGroupLineMod ItemLineMod OverrideUOMSetRef ListID',
  74 => 'ItemGroupLineMod ItemLineMod OverrideUOMSetRef FullName',
  75 => 'ItemGroupLineMod ItemLineMod Cost',
  76 => 'ItemGroupLineMod ItemLineMod Amount',
  77 => 'ItemGroupLineMod ItemLineMod TaxAmount',
  78 => 'ItemGroupLineMod ItemLineMod CustomerRef ListID',
  79 => 'ItemGroupLineMod ItemLineMod CustomerRef FullName',
  80 => 'ItemGroupLineMod ItemLineMod ClassRef ListID',
  81 => 'ItemGroupLineMod ItemLineMod ClassRef FullName',
  82 => 'ItemGroupLineMod ItemLineMod SalesTaxCodeRef ListID',
  83 => 'ItemGroupLineMod ItemLineMod SalesTaxCodeRef FullName',
  84 => 'ItemGroupLineMod ItemLineMod BillableStatus',
  85 => 'ItemGroupLineMod ItemLineMod OverrideItemAccountRef ListID',
  86 => 'ItemGroupLineMod ItemLineMod OverrideItemAccountRef FullName',
  87 => 'IncludeRetElement',
);

		return $paths;
	}
}

?>