package licenta.service;

import licenta.dao.ElectionsDao;
import licenta.entity.Elections;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import java.util.List;

@Component
public class ElectionsService {
    @Autowired
    private ElectionsDao dao;

    public List<Elections> findAllElections(){return dao.findAllElections();}
    public Elections findElectionByName(String name){
      return dao.findElectionByName(name);
    }
}
