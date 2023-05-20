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

    public Elections findElectionById(long electionId){
      return dao.findElectionById(electionId);
    }

    public Elections addElection(Elections election) {
        return dao.addElection(election);
    }

    public void deleteElection(long electionId) {
        dao.deleteElection(electionId);
    }
}
