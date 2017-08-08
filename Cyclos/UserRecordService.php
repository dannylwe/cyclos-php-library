<?php namespace Cyclos;

/**
 * Service interface for User Record
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class UserRecordService extends Service {

    function __construct() {
        parent::__construct('userRecordService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns data for searching user records
     * @param userRecordTypeId Java type: java.lang.Long     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.records.UserRecordsSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordService.html#getSearchData(java.lang.Long,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getSearchData($userRecordTypeId, $locator) {
        return $this->run('getSearchData', array($userRecordTypeId, $locator));
    }
    
    /**
     * Returns data for listing tiled user records of a given user. When
     * locator is null, it is assumed the logged user
     * @param userRecordTypeId Java type: java.lang.Long     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.records.TiledUserRecordsData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordService.html#getTiledRecordsData(java.lang.Long,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getTiledRecordsData($userRecordTypeId, $locator) {
        return $this->run('getTiledRecordsData', array($userRecordTypeId, $locator));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Searches for user records
     * @param query Java type: org.cyclos.model.users.records.UserRecordQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordService.html#search(org.cyclos.model.users.records.UserRecordQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
}