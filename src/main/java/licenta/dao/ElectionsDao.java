package licenta.dao;

import licenta.entity.Elections;
import licenta.entity.repo.ElectionsRepo;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class ElectionsDao {
    @Autowired
    ElectionsRepo electionsRepo;

    public Elections findElectionByName(String name){
       return electionsRepo.findByName(name);
    }
}
