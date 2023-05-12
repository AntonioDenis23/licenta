package licenta.service;

import licenta.dao.ElectionsDao;
import licenta.dto.ElectionDto;
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

    public Elections addElection(Elections election) {
        return dao.addElection(election);
    }

    public void deleteElection(Elections electionDtoToElection) {
        dao.deleteElection(electionDtoToElection);
    }
}
