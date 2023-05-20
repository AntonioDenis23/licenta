package licenta.controller;

import licenta.dto.ElectionDto;
import licenta.entity.Elections;
import licenta.mapper.ElectionMapper;
import licenta.service.ElectionsService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
public class ElectionsController {
    @Autowired
    ElectionsService service;

    @Autowired
    ElectionMapper mapper;

    @GetMapping("/elections")
    public ResponseEntity<List<Elections>> getElections() {
        return ResponseEntity.ok(service.findAllElections());
    }

    @GetMapping("/election")
    public ResponseEntity<ElectionDto> getElectionByName(@RequestParam long electionId) {
        return ResponseEntity.ok(mapper.electionToElectionDto(service.findElectionById(electionId)));
    }
    @PostMapping("/addElection")
    public ResponseEntity<ElectionDto> addElection(@RequestBody ElectionDto election) {
        return ResponseEntity.ok(mapper.electionToElectionDto(service.addElection(mapper.electionDtoToElection(election))));
    }
    @PostMapping("/deleteElection")
    public void deleteElection(@RequestBody long electionId) {
        service.deleteElection(electionId);
    }
}
