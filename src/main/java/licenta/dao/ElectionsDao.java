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

    public Elections findElectionById(long electionId) {
        return electionsRepo.findById(electionId).orElse(null);
    }
    public Elections findElectionById(int id) {
        return electionsRepo.findById(Long.valueOf(id)).orElse(null);
    }

    public Elections addElection(Elections elections) {
        return electionsRepo.save(elections);
    }

    public void deleteElection(long electionId) {
        Elections electionsTobeDeleted = findElectionById(electionId);
        electionsRepo.delete(electionsTobeDeleted);

    }
}
