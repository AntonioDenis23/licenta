package licenta.controller;

import licenta.dto.ElectionDto;
import licenta.entity.Elections;
import licenta.mapper.ElectionMapper;
import licenta.service.ElectionsService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
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
    public ResponseEntity<ElectionDto> getElectionByName(@RequestParam String electionName) {
        return ResponseEntity.ok(mapper.electionToElectionDto(service.findElectionByName(electionName)));
    }

}
