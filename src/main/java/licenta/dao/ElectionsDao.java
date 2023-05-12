package licenta.dao;

import licenta.entity.Elections;
import licenta.entity.repo.ElectionsRepo;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

import java.util.List;

@Component
public class ElectionsDao {
    @Autowired
    ElectionsRepo electionsRepo;

    public List<Elections> findAllElections() {
        return (List<Elections>) electionsRepo.findAll();
    }

    public Elections findElectionByName(String name) {
        return electionsRepo.findByName(name);
    }

    public Elections addElection(Elections elections) {
        return electionsRepo.save(elections);
    }

    public void deleteElection(Elections elections) {
        Elections electionsTobeDeleted = findElectionByName(elections.getName());
        electionsRepo.delete(electionsTobeDeleted);

    }
}
