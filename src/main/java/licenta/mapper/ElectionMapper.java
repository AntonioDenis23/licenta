package licenta.mapper;

import licenta.dto.ElectionDto;
import licenta.entity.Elections;
import org.mapstruct.Mapper;
import org.mapstruct.Mapping;

@Mapper(componentModel = "spring")
public interface ElectionMapper {
    @Mapping(target = "users",ignore = true)
    ElectionDto electionToElectionDto(Elections elections);

    @Mapping(target = "users",ignore = true)
    Elections electionDtoToElection(ElectionDto elections);
}
