<?php

namespace Sprint\Migration;



class  migration_clients_20225030183807 extends Version
{

    protected $description = "миграция для создания типа инфоблоков - клиенты, инфоблоков адреса и контакты, для удобства проверки дз объединил в одном файле";
    
    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $helper->Iblock()->saveIblockType([
            'ID' => 'clients',
            'LANG' => [
                'en' => [
                    'NAME' => 'Clients',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
                'ru' => [
                    'NAME' => 'Клиенты',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
            ],
        ]);

        $IBlockIdContacts = $helper->Iblock()->saveIblock([
            'NAME' => 'Контакты',
            'CODE' => 'contacts',
            'LID' => ['s1'],
            'IBLOCK_TYPE_ID' => 'clients',
            'LIST_PAGE_URL' => '#SITE_DIR#/clients/index.php',
            'DETAIL_PAGE_URL' => '',
        ]);

        $helper->Iblock()->saveIblockFields($IBlockIdContacts, [
            'CODE' => [
                'DEFAULT_VALUE' => [
                    'TRANSLITERATION' => 'Y',
                    'UNIQUE' => 'Y',
                ],
            ],
        ]);

        $helper->Iblock()->saveProperty($IBlockIdContacts, [
            'NAME' => 'ФИО',
            'CODE' => 'COMPLETE_NAME',
            'IS_REQUIRED' => 'Y',
        ]);

        $helper->Iblock()->saveProperty($IBlockIdContacts, [
            'NAME' => 'телефон',
            'CODE' => 'PHONE',
            'IS_REQUIRED' => 'Y',
        ]);

        $helper->Iblock()->saveProperty($IBlockIdContacts, [
            'NAME' => 'адрес',
            'CODE' => 'ADDRESS',
            'IS_REQUIRED' => 'Y',
            'LINK_IBLOCK_ID' => 'clients:addresses',

        ]);

        $IBlockIdAddresses = $helper->Iblock()->saveIblock([
            'NAME' => 'Адреса',
            'CODE' => 'addresses',
            'LID' => ['s1'],
            'IBLOCK_TYPE_ID' => 'clients',
            'LIST_PAGE_URL' => '',
            'DETAIL_PAGE_URL' => '',
        ]);

        $helper->Iblock()->saveIblockFields($IBlockIdAddresses, [
            'CODE' => [
                'DEFAULT_VALUE' => [
                    'TRANSLITERATION' => 'Y',
                    'UNIQUE' => 'Y',
                ],
            ],
        ]);


        $helper->Iblock()->saveProperty($IBlockIdAddresses, [
            'NAME' => 'город',
            'CODE' => 'CITY',
            'IS_REQUIRED' => 'Y',
        ]);

        $helper->Iblock()->saveProperty($IBlockIdAddresses, [
            'NAME' => 'улица',
            'CODE' => 'STREET',
            'IS_REQUIRED' => 'Y',

        ]);

        $helper->Iblock()->saveProperty($IBlockIdAddresses, [
            'NAME' => 'дом',
            'CODE' => 'BUILDING',
            'IS_REQUIRED' => 'Y',
        ]);
        
        $helper->Iblock()->saveProperty($IBlockIdAddresses, [
            'NAME' => 'квартира',
            'CODE' => 'FLAT',
            'IS_REQUIRED' => 'Y',
        ]);


        $this->outSuccess('Инфоблоки созданы');

    }

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function down()
    {
        $helper = $this->getHelperManager();
        $ok = $helper->Iblock()->deleteIblockIfExists('contacts');
        $ok = $helper->Iblock()->deleteIblockIfExists('addresses');
        $ok = $helper->Iblock()->deleteIblockTypeIfExists('clients');

        if ($ok) {
            $this->outSuccess('Миграция удалена успешна');
        } else {
            $this->outError('Ошибка удаления миграция');
        }
    }

}