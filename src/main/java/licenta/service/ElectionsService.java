package licenta.service;

import licenta.dao.ElectionsDao;
import licenta.entity.Elections;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class ElectionsService {
    @Autowired
    private ElectionsDao dao;

    public Elections findElectionByName(String name){
      return dao.findElectionByName(name);
    }
}
